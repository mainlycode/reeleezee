mainlycode/reeleezee
====================

PHP library for the Reeleezee API.

## Usage

```php
require_once 'vendor/autoload.php';

$exportInfo = new \MainlyCode\Reeleezee\ValueObject\ExportInfoType();
$exportInfo->setName('mainlycode/reeleezee example');

$salesInvoice = new \MainlyCode\Reeleezee\ValueObject\SalesInvoiceType();
$salesInvoice->setReferenceNumber(1337);

$import = new \MainlyCode\Reeleezee\ValueObject\Reeleezee\ImportAType();
$import->setExportInfo($exportInfo);
$import->addToSalesInvoiceList($salesInvoice);

$reeleezee = new MainlyCode\Reeleezee\ValueObject\Reeleezee();
$reeleezee->setImport($import);

$client = new \MainlyCode\Reeleezee\Client(
    $username,
    $password,
    [],
    true // will check only for validity of request
);

echo $client->import($reeleezee)
    ->getImportResult();
```

```xml
<?xml version="1.0" encoding="utf-8"?>
<?xml-stylesheet type="text/xsl" href="https://portal.reeleezee.nl/taxonomy/1.27/Reeleezee.xslt"?>
<Reeleezee xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="https://portal.reeleezee.nl/taxonomy/1.27 taxonomy/1.27/Reeleezee.xsd" xmlns="https://portal.reeleezee.nl/taxonomy/1.27">
	<ImportResult ProcessedDateTime="2015-06-15T19:04:56.3299572+02:00" Succeeded="true">
		<ExportInfo>
			<Name>mainlycode/reeleezee example</Name>
		</ExportInfo>
		<SalesInvoice>
			<TotalProcessed>0</TotalProcessed>
			<TotalCreated>0</TotalCreated>
			<TotalUpdated>0</TotalUpdated>
			<TotalDeleted>0</TotalDeleted>
			<TotalIgnored>0</TotalIgnored>
		</SalesInvoice>
	</ImportResult>
</Reeleezee>
```

## Update the value objects and serialization metadata
### generate value objects:

```
composer run-script build-php
```

### generate [JMS Serializer](http://jmsyst.com/libs/serializer) compatible metadata
```
composer run-script build-yml
```
