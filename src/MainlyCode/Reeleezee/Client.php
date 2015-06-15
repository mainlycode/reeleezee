<?php

namespace MainlyCode\Reeleezee;

use JMS\Serializer\SerializerBuilder;
use MainlyCode\Reeleezee\ValueObject\Reeleezee;
use SoapClient;

class Client extends SoapClient
{
    const WSDL = 'https://portal.reeleezee.nl/ezVersionService/externalServices/TaxonomyService/TaxonomyWebService.asmx?wsdl';

    private $username;
    private $password;
    private $checkValidityOnly;
    private $serializer;

    /**
     * @param string  $username
     * @param string  $password
     * @param array   $options
     * @param boolean $checkValidityOnly
     */
    public function __construct($username, $password, array $options = [], $checkValidityOnly = false)
    {
        $this->username          = $username;
        $this->password          = $password;
        $this->checkValidityOnly = $checkValidityOnly;

        $options['classmap'] = [
            'Import'         => 'MainlyCode\Reeleezee\Import',
            'ImportResponse' => 'MainlyCode\Reeleezee\ImportResult',
        ];
        $options['location'] = 'https://portal.reeleezee.nl/ezVersionService/externalServices/TaxonomyService/TaxonomyWebService.asmx?wsdl';

        parent::__construct(self::WSDL, $options);

        $this->__setLocation(self::WSDL);

        $this->serializer = SerializerBuilder::create()
            ->addMetadataDir(__DIR__ . '/../../../metadata', 'MainlyCode\Reeleezee\ValueObject')
            ->build();
    }

    /**
     * @param Reeleezee $reeleezee
     *
     * @return ImportResult
     */
    public function import(Reeleezee $reeleezee)
    {
        return $this->__soapCall(
            'Import',
            [
                $this->createImport($reeleezee)
            ],
            [
                'uri'        => 'http://reeleezee.com/webservices/',
                'soapaction' => ''
            ]
        );
    }

    /**
     * @param Reeleezee $reeleezee
     *
     * @return Import
     */
    private function createImport(Reeleezee $reeleezee)
    {
        $xml = $this->serializer->serialize($reeleezee, 'xml');

        return new Import(
            $this->username,
            $this->password,
            $xml,
            $this->checkValidityOnly
        );
    }
}
