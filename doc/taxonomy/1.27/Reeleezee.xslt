<?xml version="1.0" encoding="utf-8" ?>
<xsl:stylesheet version="1.0"
	xmlns:ms="urn:schemas-microsoft-com:xslt"
	xmlns:dt="urn:schemas-microsoft-com:datatypes"
	xmlns:rlz="https://portal.reeleezee.nl/taxonomy/1.27"
	xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
	xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance">
	
	<xsl:template match="rlz:ExportInfo">
		<TABLE CLASS="ExportInfoTable" BORDER="0" CELLSPACING="0" CELLPADDING="0">
			<COLGROUP>
				<COL WIDTH="150" />
				<COL />
			</COLGROUP>
			<TR CLASS="ExportInfoRow">
				<TD STYLE="border:1px solid #404040;padding:2 2 2 5"><B>Name</B></TD>
				<TD STYLE="border:1px solid #404040;padding:2 2 2 5"><xsl:value-of select="rlz:Name" /><BR/></TD>
			</TR>
			
			<TR CLASS="ExportInfoRow">
				<TD STYLE="border:1px solid #404040;padding:2 2 2 5"><B>Source</B></TD>
				<TD STYLE="border:1px solid #404040;padding:2 2 2 5"><xsl:value-of select="rlz:Source" /><BR/></TD>
			</TR>
			
			<TR CLASS="ExportInfoRow">
				<TD STYLE="border:1px solid #404040;padding:2 2 2 5"><B>Destination</B></TD>
				<TD STYLE="border:1px solid #404040;padding:2 2 2 5"><xsl:value-of select="rlz:Destination" /><BR/></TD>
			</TR>
			
			<TR CLASS="ExportInfoRow">
				<TD STYLE="border:1px solid #404040;padding:2 2 2 5"><B>Reference</B></TD>
				<TD STYLE="border:1px solid #404040;padding:2 2 2 5"><xsl:value-of select="rlz:Reference" /><BR/></TD>
			</TR>
			
			<TR CLASS="ExportInfoRow">
				<TD STYLE="border:1px solid #404040;padding:2 2 2 5"><B>Created</B></TD>
				<TD STYLE="border:1px solid #404040;padding:2 2 2 5"><xsl:value-of select="rlz:CreateDateTime" /><BR/></TD>
			</TR>
			
			<TR CLASS="ExportInfoRow">
				<TD STYLE="border:1px solid #404040;padding:2 2 2 5"><B>From</B></TD>
				<TD STYLE="border:1px solid #404040;padding:2 2 2 5"><xsl:value-of select="rlz:FromDateTime" /><BR/></TD>
			</TR>
			
			<TR CLASS="ExportInfoRow">
				<TD STYLE="border:1px solid #404040;padding:2 2 2 5"><B>To</B></TD>
				<TD STYLE="border:1px solid #404040;padding:2 2 2 5"><xsl:value-of select="rlz:ToDateTime" /><BR/></TD>
			</TR>
			
			<TR CLASS="ExportInfoRow">
				<TD STYLE="border:1px solid #404040;padding:2 2 2 5"><B>Comment</B></TD>
				<TD STYLE="border:1px solid #404040;padding:2 2 2 5"><xsl:value-of select="rlz:Comment" /><BR/></TD>
			</TR>
		</TABLE>
	</xsl:template>
	
	
	<xsl:template match="rlz:MessageList">
		<TABLE CLASS="MessageTable" BORDER="0" CELLSPACING="0" CELLPADDING="0">
			<COLGROUP>
				<COL WIDTH="50" />
				<COL />
			</COLGROUP>
			
			<TR CLASS="MessageHeader" STYLE="cursor:hand" ONCLICK="expandOrCollapse(this)" ONDBLCLICK="expandOrCollapse(this)">
				<TD STYLE="border:1px solid #404040;padding:3 3 3 3" COLSPAN="2"><SPAN STYLE="width:10">+</SPAN> Messages (<xsl:value-of select="count(rlz:Message[@Level='ERROR'])" />
				<xsl:choose>
					<xsl:when test="count(rlz:Message[@Level='ERROR'])=1"> error</xsl:when>
					<xsl:otherwise> errors</xsl:otherwise>
				</xsl:choose>, <xsl:value-of select="count(rlz:Message)" /> total)</TD>
			</TR>
		
		
			<TR CLASS="MessageSubHeader" STYLE="display:none">
				<TD STYLE="border:1px solid #404040;padding:3 3 3 5">Level</TD>
				<TD STYLE="border:1px solid #404040;padding:3 3 3 5">Message</TD>
			</TR>
			
			<xsl:for-each select="rlz:Message">
				<TR STYLE="display:none">
					<xsl:choose>
						<xsl:when test="@Level='INFO'"><xsl:attribute name="CLASS">MessageRowInfo</xsl:attribute></xsl:when>
						<xsl:when test="@Level='WARN'"><xsl:attribute name="CLASS">MessageRowWarn</xsl:attribute></xsl:when>
						<xsl:when test="@Level='ERROR'"><xsl:attribute name="CLASS">MessageRowError</xsl:attribute></xsl:when>
					</xsl:choose>
					<TD STYLE="border:1px solid #404040;padding:2 2 2 5"><xsl:value-of select="@Level" /></TD>
					<TD STYLE="border:1px solid #404040;padding:2 2 2 5"><xsl:value-of select="." /></TD>
				</TR>
			</xsl:for-each>
		</TABLE>
	</xsl:template>
	
	<xsl:template match="rlz:Address">
		<TABLE CLASS="AddressTable" STYLE="width:250" BORDER="0" CELLSPACING="0" CELLPADDING="0">
			<COLGROUP>
				<COL WIDTH="100" />
				<COL />
			</COLGROUP>
			
			<TR CLASS="AddressHeader" STYLE="cursor:hand" ONCLICK="expandOrCollapse(this)" ONDBLCLICK="expandOrCollapse(this)">
				<TD STYLE="border:1px solid #404040;padding:3 3 3 3" COLSPAN="2"><SPAN STYLE="width:10">+</SPAN>&#160;<xsl:value-of select="@Type" /></TD>
			</TR>

			<TR CLASS="ExportInfoRow" STYLE="display:none">
				<TD STYLE="border:1px solid #404040;padding:2 2 2 5"><B>Street</B></TD>
				<TD STYLE="border:1px solid #404040;padding:2 2 2 5" NOWRAP="true"><xsl:choose><xsl:when test="rlz:Street/@xsi:nil[.='true' or .=1]"><SPAN STYLE="color:#4f81bd">---</SPAN></xsl:when><xsl:otherwise><xsl:value-of select="rlz:Street" /></xsl:otherwise></xsl:choose><BR/></TD>
			</TR>
			
			<TR CLASS="ExportInfoRow" STYLE="display:none">
				<TD STYLE="border:1px solid #404040;padding:2 2 2 5"><B>Number</B></TD>
				<TD STYLE="border:1px solid #404040;padding:2 2 2 5" NOWRAP="true"><xsl:choose><xsl:when test="rlz:Number/@xsi:nil[.='true' or .=1]"><SPAN STYLE="color:#4f81bd">---</SPAN></xsl:when><xsl:otherwise><xsl:value-of select="rlz:Number" /></xsl:otherwise></xsl:choose><BR/></TD>
			</TR>
			
			<TR CLASS="ExportInfoRow" STYLE="display:none">
				<TD STYLE="border:1px solid #404040;padding:2 2 2 5"><B>Zipcode</B></TD>
				<TD STYLE="border:1px solid #404040;padding:2 2 2 5" NOWRAP="true"><xsl:choose><xsl:when test="rlz:Zipcode/@xsi:nil[.='true' or .=1]"><SPAN STYLE="color:#4f81bd">---</SPAN></xsl:when><xsl:otherwise><xsl:value-of select="rlz:Zipcode" /></xsl:otherwise></xsl:choose><BR/></TD>
			</TR>
			
			<TR CLASS="ExportInfoRow" STYLE="display:none">
				<TD STYLE="border:1px solid #404040;padding:2 2 2 5"><B>City</B></TD>
				<TD STYLE="border:1px solid #404040;padding:2 2 2 5" NOWRAP="true"><xsl:choose><xsl:when test="rlz:City/@xsi:nil[.='true' or .=1]"><SPAN STYLE="color:#4f81bd">---</SPAN></xsl:when><xsl:otherwise><xsl:value-of select="rlz:City" /></xsl:otherwise></xsl:choose><BR/></TD>
			</TR>
			
			<TR CLASS="ExportInfoRow" STYLE="display:none">
				<TD STYLE="border:1px solid #404040;padding:2 2 2 5"><B>Country&#160;code</B></TD>
				<TD STYLE="border:1px solid #404040;padding:2 2 2 5" NOWRAP="true"><xsl:choose><xsl:when test="rlz:CountryCode/@xsi:nil[.='true' or .=1]"><SPAN STYLE="color:#4f81bd">---</SPAN></xsl:when><xsl:otherwise><xsl:value-of select="rlz:CountryCode" /></xsl:otherwise></xsl:choose><BR/></TD>
			</TR>

		</TABLE>
	</xsl:template>
	
	
	<xsl:template match="rlz:CustomerList">
		<TABLE CLASS="ImportObjectTable" BORDER="0" CELLSPACING="0" CELLPADDING="0">
			<COLGROUP>
				<COL ALIGN="right" />
				<COL ALIGN="right" />
				<COL />
				<COL />
				<COL />
				<COL />
				<COL />
				<COL />
				<COL />
				<COL />
				<COL />
				<COL />
				<COL ALIGN="right" />
				<COL />
				<COL ALIGN="right" />
				<COL ALIGN="right" />
				<COL ALIGN="right" />
				<COL ALIGN="right" />
				<COL ALIGN="right" />
				 
			</COLGROUP>
			<TR CLASS="ImportObjectHeader">
				<TD STYLE="border:1px solid #404040;padding:3 3 3 3" COLSPAN="21" ALIGN="left">Customers</TD>
			</TR>
			
			<TR CLASS="ImportObjectSubHeader">
				<TD STYLE="border:1px solid #404040;padding:3 5 3 5">ID</TD>
				<TD STYLE="border:1px solid #404040;padding:3 5 3 5">ID</TD>
				<TD STYLE="border:1px solid #404040;padding:3 5 3 5">Full&#160;name</TD>
				<TD STYLE="border:1px solid #404040;padding:3 5 3 5">Search&#160;name</TD>
				<TD STYLE="border:1px solid #404040;padding:3 5 3 5">Code</TD>
				<TD STYLE="border:1px solid #404040;padding:3 5 3 5">Default&#160;address</TD>
				
				<TD STYLE="border:1px solid #404040;padding:3 5 3 5">Language&#160;code</TD>
				<TD STYLE="border:1px solid #404040;padding:3 5 3 5">Phonenumber</TD>
				<TD STYLE="border:1px solid #404040;padding:3 5 3 5">Faxnumber</TD>
				<TD STYLE="border:1px solid #404040;padding:3 5 3 5">Email&#160;address</TD>
				<TD STYLE="border:1px solid #404040;padding:3 5 3 5">Website</TD>
				<TD STYLE="border:1px solid #404040;padding:3 5 3 5">Comment</TD>
				<TD STYLE="border:1px solid #404040;padding:3 5 3 5">CoC&#160;number</TD>
				<TD STYLE="border:1px solid #404040;padding:3 5 3 5">CoC&#160;city</TD>
				
				<TD STYLE="border:1px solid #404040;padding:3 5 3 5">Fiscal&#160;number</TD>
				<TD STYLE="border:1px solid #404040;padding:3 5 3 5">LH</TD>
				<TD STYLE="border:1px solid #404040;padding:3 5 3 5">OB</TD>
				<TD STYLE="border:1px solid #404040;padding:3 5 3 5">ICL</TD>
				<TD STYLE="border:1px solid #404040;padding:3 5 3 5">Bankaccount</TD>
				<TD STYLE="border:1px solid #404040;padding:3 5 3 5">Branch</TD>
				<TD STYLE="border:1px solid #404040;padding:3 5 10 5">Address</TD>
				
			</TR>

			<xsl:for-each select="rlz:Customer">
				<TR CLASS="ImportObjectRow">
					<TD STYLE="border:1px solid #404040;padding:2 5 2 5"><xsl:value-of select="@ID" /></TD>
					<TD STYLE="border:1px solid #404040;padding:2 5 2 5"><xsl:choose><xsl:when test="rlz:ID[@xsi:nil='true' or @xsi:nil=1]"><SPAN STYLE="color:#75923c">---</SPAN></xsl:when><xsl:otherwise><xsl:value-of select="rlz:ID" /></xsl:otherwise></xsl:choose></TD>
					<TD STYLE="border:1px solid #404040;padding:2 5 2 5" NOWRAP="true"><xsl:value-of select="rlz:FullName" /></TD>
					<TD STYLE="border:1px solid #404040;padding:2 5 2 5" NOWRAP="true"><xsl:value-of select="rlz:SearchName" /></TD>
					
					
					<TD STYLE="border:1px solid #404040;padding:2 5 2 5"><xsl:choose><xsl:when test="rlz:Code/@xsi:nil[.='true' or .=1]"><SPAN STYLE="color:#75923c">---</SPAN></xsl:when><xsl:otherwise><xsl:value-of select="rlz:Code" /></xsl:otherwise></xsl:choose></TD>
					<TD STYLE="border:1px solid #404040;padding:2 5 2 5"><xsl:choose><xsl:when test="rlz:DefaultAddress"><xsl:value-of select="rlz:DefaultAddress" /></xsl:when><xsl:otherwise><xsl:value-of select="rlz:AddressForBilling" /></xsl:otherwise></xsl:choose></TD>
					
					<TD STYLE="border:1px solid #404040;padding:2 5 2 5"><xsl:value-of select="rlz:LanguageCode" /></TD>
					<TD STYLE="border:1px solid #404040;padding:2 5 2 5" NOWRAP="true"><xsl:choose><xsl:when test="rlz:PhoneNumber/@xsi:nil[.='true' or .=1]"><SPAN STYLE="color:#75923c">---</SPAN></xsl:when><xsl:otherwise><xsl:value-of select="rlz:PhoneNumber" /></xsl:otherwise></xsl:choose><BR/></TD>
					<TD STYLE="border:1px solid #404040;padding:2 5 2 5" NOWRAP="true"><xsl:choose><xsl:when test="rlz:FaxNumber/@xsi:nil[.='true' or .=1]"><SPAN STYLE="color:#75923c">---</SPAN></xsl:when><xsl:otherwise><xsl:value-of select="rlz:FaxNumber" /></xsl:otherwise></xsl:choose><BR/></TD>
					<TD STYLE="border:1px solid #404040;padding:2 5 2 5" NOWRAP="true"><xsl:choose><xsl:when test="rlz:EmailAddress/@xsi:nil[.='true' or .=1]"><SPAN STYLE="color:#75923c">---</SPAN></xsl:when><xsl:otherwise><xsl:value-of select="rlz:EmailAddress" /></xsl:otherwise></xsl:choose><BR/></TD>
					<TD STYLE="border:1px solid #404040;padding:2 5 2 5" NOWRAP="true"><xsl:choose><xsl:when test="rlz:WebsiteAddress/@xsi:nil[.='true' or .=1]"><SPAN STYLE="color:#75923c">---</SPAN></xsl:when><xsl:otherwise><xsl:value-of select="rlz:WebsiteAddress" /></xsl:otherwise></xsl:choose><BR/></TD>
					<TD STYLE="border:1px solid #404040;padding:2 5 2 5"><xsl:choose><xsl:when test="rlz:Comment/@xsi:nil[.='true' or .=1]"><SPAN STYLE="color:#75923c">---</SPAN></xsl:when><xsl:otherwise><xsl:value-of select="rlz:Comment" /></xsl:otherwise></xsl:choose><BR/></TD>
					<TD STYLE="border:1px solid #404040;padding:2 5 2 5" NOWRAP="true"><xsl:choose><xsl:when test="rlz:ChamberOfCommerceNumber/@xsi:nil[.='true' or .=1]"><SPAN STYLE="color:#75923c">---</SPAN></xsl:when><xsl:otherwise><xsl:value-of select="rlz:ChamberOfCommerceNumber" /></xsl:otherwise></xsl:choose><BR/></TD>
					
					<TD STYLE="border:1px solid #404040;padding:2 5 2 5" NOWRAP="true"><xsl:choose><xsl:when test="rlz:ChamberOfCommerceCity/@xsi:nil[.='true' or .=1]"><SPAN STYLE="color:#75923c">---</SPAN></xsl:when><xsl:otherwise><xsl:value-of select="rlz:ChamberOfCommerceCity" /></xsl:otherwise></xsl:choose><BR/></TD>
					<TD STYLE="border:1px solid #404040;padding:2 5 2 5" NOWRAP="true"><xsl:choose><xsl:when test="rlz:FiscalIdentificationNumber/@xsi:nil[.='true' or .=1]"><SPAN STYLE="color:#75923c">---</SPAN></xsl:when><xsl:otherwise><xsl:value-of select="rlz:FiscalIdentificationNumber" /></xsl:otherwise></xsl:choose><BR/></TD>
					<TD STYLE="border:1px solid #404040;padding:2 5 2 5" NOWRAP="true"><xsl:choose><xsl:when test="rlz:TaxDepositLHNumber/@xsi:nil[.='true' or .=1]"><SPAN STYLE="color:#75923c">---</SPAN></xsl:when><xsl:otherwise><xsl:value-of select="rlz:TaxDepositLHNumber" /></xsl:otherwise></xsl:choose><BR/></TD>
					
					<TD STYLE="border:1px solid #404040;padding:2 5 2 5" NOWRAP="true"><xsl:choose><xsl:when test="rlz:TaxDepositOBNumber/@xsi:nil[.='true' or .=1]"><SPAN STYLE="color:#75923c">---</SPAN></xsl:when><xsl:otherwise><xsl:value-of select="rlz:TaxDepositOBNumber" /></xsl:otherwise></xsl:choose><BR/></TD>
					<TD STYLE="border:1px solid #404040;padding:2 5 2 5" NOWRAP="true"><xsl:choose><xsl:when test="rlz:TaxDepositICLNumber/@xsi:nil[.='true' or .=1]"><SPAN STYLE="color:#75923c">---</SPAN></xsl:when><xsl:otherwise><xsl:value-of select="rlz:TaxDepositICLNumber" /></xsl:otherwise></xsl:choose><BR/></TD>
					<TD STYLE="border:1px solid #404040;padding:2 5 2 5" NOWRAP="true"><xsl:choose><xsl:when test="rlz:BankAccountNumber/@xsi:nil[.='true' or .=1]"><SPAN STYLE="color:#75923c">---</SPAN></xsl:when><xsl:otherwise><xsl:value-of select="rlz:BankAccountNumber" /></xsl:otherwise></xsl:choose><BR/></TD>
					<TD STYLE="border:1px solid #404040;padding:2 5 2 5" NOWRAP="true"><xsl:choose><xsl:when test="rlz:Branch/@xsi:nil[.='true' or .=1]"><SPAN STYLE="color:#75923c">---</SPAN></xsl:when><xsl:otherwise><xsl:value-of select="rlz:Branch" /></xsl:otherwise></xsl:choose><BR/></TD>
					<TD STYLE="border:1px solid #404040;padding:2 5 2 5" NOWRAP="true"><xsl:choose>
						<xsl:when test="rlz:AddressList/rlz:Address"><TABLE BORDER="0"><TR VALIGN="top"><xsl:for-each select="rlz:AddressList/rlz:Address"><TD><xsl:apply-templates select="." /></TD></xsl:for-each></TR></TABLE></xsl:when>
						<xsl:otherwise><BR/></xsl:otherwise>
					</xsl:choose></TD>
					
					
					
					
					
				</TR>
			</xsl:for-each>
			
			
		</TABLE>
	</xsl:template>
	
	
	
	<xsl:template name="result">
		<TABLE CLASS="ResultTable" BORDER="0" CELLSPACING="0" CELLPADDING="0">
			<COLGROUP>
				<COL WIDTH="100" />
				<COL />
			</COLGROUP>
			<TR CLASS="ResultRow">
				<TD STYLE="border:1px solid #404040;padding:2 2 2 5"><B>Processed</B></TD>
				<TD STYLE="border:1px solid #404040;padding:2 2 2 5"><DIV STYLE="width:20;text-align:right"><xsl:value-of select="rlz:TotalProcessed" /></DIV></TD>
			</TR>
			
			<TR CLASS="ResultRow">
				<TD STYLE="border:1px solid #404040;padding:2 2 2 5"><B>Created</B></TD>
				<TD STYLE="border:1px solid #404040;padding:2 2 2 5"><DIV STYLE="width:20;text-align:right"><xsl:value-of select="rlz:TotalCreated" /></DIV></TD>
			</TR>
			
			<TR CLASS="ResultRow">
				<TD STYLE="border:1px solid #404040;padding:2 2 2 5"><B>Updated</B></TD>
				<TD STYLE="border:1px solid #404040;padding:2 2 2 5"><DIV STYLE="width:20;text-align:right"><xsl:value-of select="rlz:TotalUpdated" /></DIV></TD>
			</TR>
			
			<TR CLASS="ResultRow">
				<TD STYLE="border:1px solid #404040;padding:2 2 2 5"><B>Deleted</B></TD>
				<TD STYLE="border:1px solid #404040;padding:2 2 2 5"><DIV STYLE="width:20;text-align:right"><xsl:value-of select="rlz:TotalDeleted" /></DIV></TD>
			</TR>
			
			<TR CLASS="ResultRow">
				<TD STYLE="border:1px solid #404040;padding:2 2 2 5"><B>Ignored</B></TD>
				<TD STYLE="border:1px solid #404040;padding:2 2 2 5"><DIV STYLE="width:20;text-align:right"><xsl:value-of select="rlz:TotalIgnored" /></DIV></TD>
			</TR>
			
			<xsl:if test="rlz:MessageList">
				<TR CLASS="ResultRow">
					<TD STYLE="border:1px solid #404040;padding:5 5 10 5" COLSPAN="2"><xsl:apply-templates select="rlz:MessageList" /></TD>
				</TR>
			</xsl:if>

			
		</TABLE>

	</xsl:template>
	
	<xsl:template match="rlz:ImportResult">
		<TABLE CLASS="ImportResultTable" BORDER="0" CELLSPACING="0" CELLPADDING="0">
			<COLGROUP>
				<COL WIDTH="140" />
				<COL />
			</COLGROUP>
			<TR CLASS="ImportResultHeader">
				<TD STYLE="border:1px solid #404040;padding:3 3 3 5" COLSPAN="2">Import result</TD>
			</TR>
			<TR CLASS="ImportResultRow">
				<TD STYLE="border:1px solid #404040;padding:2 2 2 5"><B>Succeeded</B></TD>
				<TD><xsl:choose>
					<xsl:when test="@Succeeded='true' or @Succeeded=1"><xsl:attribute name="STYLE">border:1px solid #404040;padding:2 2 2 5;color:#008000</xsl:attribute>yes</xsl:when>
					<xsl:otherwise><xsl:attribute name="STYLE">border:1px solid #404040;padding:2 2 2 5;color:#ff3300</xsl:attribute>no</xsl:otherwise>
				</xsl:choose></TD>
			</TR>
			<TR CLASS="ImportResultRow">
				<TD STYLE="border:1px solid #404040;padding:2 2 2 5"><B>Processed</B></TD>
				<TD STYLE="border:1px solid #404040;padding:2 2 2 5"><xsl:value-of select="@ProcessedDateTime" /></TD>
			</TR>
			<TR CLASS="ImportResultRow">
				<TD STYLE="border:1px solid #404040;padding:2 2 2 5"><B>Highest&#160;message&#160;level</B></TD>
				<TD STYLE="border:1px solid #404040;padding:2 2 2 5"><xsl:choose>
					<xsl:when test="rlz:MaxMessage"><xsl:value-of select="rlz:MaxMessage/@Level" /></xsl:when>
					<xsl:otherwise>none</xsl:otherwise>
				</xsl:choose></TD>
			</TR>
			<TR CLASS="ImportResultRow">
				<TD STYLE="border:1px solid #404040;padding:2 2 2 5"><B>Highest&#160;message</B></TD>
				<TD STYLE="border:1px solid #404040;padding:2 2 2 5"><xsl:value-of select="rlz:MaxMessage" /></TD>
			</TR>
			<TR CLASS="ImportResultRow">
				<TD STYLE="border:1px solid #404040;padding:5 2 2 5"><B>Export&#160;info</B></TD>
				<TD STYLE="border:1px solid #404040;padding:5 5 10 5"><xsl:choose>
					<xsl:when test="rlz:ExportInfo"><xsl:apply-templates select="rlz:ExportInfo" /></xsl:when>
					<xsl:otherwise>Not available</xsl:otherwise>
				</xsl:choose></TD>
			</TR>
			<TR CLASS="ImportResultRow">
				<TD STYLE="border:1px solid #404040;padding:5 2 2 5"><B>Main&#160;messages</B></TD>
				<TD STYLE="border:1px solid #404040;padding:5 5 10 5"><xsl:apply-templates select="rlz:MessageList" /></TD>
			</TR>
			
			<xsl:if test="rlz:Product">
				<TR CLASS="ImportResultRow">
					<TD STYLE="border:1px solid #404040;padding:5 2 2 5"><B>Products</B></TD>
					<TD STYLE="border:1px solid #404040;padding:5 5 10 5"><xsl:for-each select="rlz:Product"><xsl:call-template name="result" /></xsl:for-each></TD>
				</TR>
			</xsl:if>
			
			<xsl:if test="rlz:Account">
				<TR CLASS="ImportResultRow">
					<TD STYLE="border:1px solid #404040;padding:5 2 2 5"><B>Accounts</B></TD>
					<TD STYLE="border:1px solid #404040;padding:5 5 10 5"><xsl:for-each select="rlz:Account"><xsl:call-template name="result" /></xsl:for-each></TD>
				</TR>
			</xsl:if>
			
			<xsl:if test="rlz:Customer">
				<TR CLASS="ImportResultRow">
					<TD STYLE="border:1px solid #404040;padding:5 2 2 5"><B>Customers</B></TD>
					<TD STYLE="border:1px solid #404040;padding:5 5 10 5"><xsl:for-each select="rlz:Customer"><xsl:call-template name="result" /></xsl:for-each></TD>
				</TR>
			</xsl:if>
			
			<xsl:if test="rlz:Vendor">
				<TR CLASS="ImportResultRow">
					<TD STYLE="border:1px solid #404040;padding:5 2 2 5"><B>Vendors</B></TD>
					<TD STYLE="border:1px solid #404040;padding:5 5 10 5"><xsl:for-each select="rlz:Vendor"><xsl:call-template name="result" /></xsl:for-each></TD>
				</TR>
			</xsl:if>
			
			<xsl:if test="rlz:Person">
				<TR CLASS="ImportResultRow">
					<TD STYLE="border:1px solid #404040;padding:5 2 2 5"><B>Persons</B></TD>
					<TD STYLE="border:1px solid #404040;padding:5 5 10 5"><xsl:for-each select="rlz:Person"><xsl:call-template name="result" /></xsl:for-each></TD>
				</TR>
			</xsl:if>
			
			<xsl:if test="rlz:Person/rlz:Login">
				<TR CLASS="ImportResultRow">
					<TD STYLE="border:1px solid #404040;padding:5 2 2 5"><B>Person&#160;logins</B></TD>
					<TD STYLE="border:1px solid #404040;padding:5 5 10 5"><xsl:for-each select="rlz:Person/rlz:Login"><xsl:call-template name="result" /></xsl:for-each></TD>
				</TR>
			</xsl:if>
			
			<xsl:if test="rlz:SalesInvoice">
				<TR CLASS="ImportResultRow">
					<TD STYLE="border:1px solid #404040;padding:5 2 2 5"><B>Sales&#160;invoices</B></TD>
					<TD STYLE="border:1px solid #404040;padding:5 5 10 5"><xsl:for-each select="rlz:SalesInvoice"><xsl:call-template name="result" /></xsl:for-each></TD>
				</TR>
			</xsl:if>
			
			<xsl:if test="rlz:PurchaseInvoice">
				<TR CLASS="ImportResultRow">
					<TD STYLE="border:1px solid #404040;padding:5 2 2 5"><B>Purchase&#160;invoices</B></TD>
					<TD STYLE="border:1px solid #404040;padding:5 5 10 5"><xsl:for-each select="rlz:PurchaseInvoice"><xsl:call-template name="result" /></xsl:for-each></TD>
				</TR>
			</xsl:if>
			
			<xsl:if test="rlz:ManualJournal">
				<TR CLASS="ImportResultRow">
					<TD STYLE="border:1px solid #404040;padding:5 2 2 5"><B>Manual&#160;journals</B></TD>
					<TD STYLE="border:1px solid #404040;padding:5 5 10 5"><xsl:for-each select="rlz:ManualJournal"><xsl:call-template name="result" /></xsl:for-each></TD>
				</TR>
			</xsl:if>

		</TABLE><P/>
	</xsl:template>
	
	
	<xsl:template match="rlz:Import">
		<TABLE CLASS="ImportResultTable" BORDER="0" CELLSPACING="0" CELLPADDING="0">
			<COLGROUP>
				<COL WIDTH="140" />
				<COL />
			</COLGROUP>
			<TR CLASS="ImportResultHeader">
				<TD STYLE="border:1px solid #404040;padding:3 3 3 5" COLSPAN="2">Import</TD>
			</TR>
			<TR CLASS="ImportResultRow">
				<TD STYLE="border:1px solid #404040;padding:2 2 2 5"><B>Ignore&#160;invalid&#160;values</B></TD>
				<TD STYLE="border:1px solid #404040;padding:2 2 2 5"><xsl:choose>
					<xsl:when test="@AutoIgnoreEnabled='true' or @AutoIgnoreEnabled=1">yes</xsl:when>
					<xsl:otherwise>no</xsl:otherwise>
				</xsl:choose></TD>
			</TR>
			
			<TR CLASS="ImportResultRow">
				<TD STYLE="border:1px solid #404040;padding:2 2 2 5"><B>Trim&#160;values</B></TD>
				<TD STYLE="border:1px solid #404040;padding:2 2 2 5"><xsl:choose>
					<xsl:when test="@AutoTrimEnabled='true' or @AutoTrimEnabled=1">yes</xsl:when>
					<xsl:otherwise>no</xsl:otherwise>
				</xsl:choose></TD>
			</TR>
			
			<TR CLASS="ImportResultRow">
				<TD STYLE="border:1px solid #404040;padding:2 2 2 5"><B>Truncate&#160;long&#160;values</B></TD>
				<TD STYLE="border:1px solid #404040;padding:2 2 2 5"><xsl:choose>
					<xsl:when test="@AutoTruncateEnabled='true' or @AutoTruncateEnabled=1">yes</xsl:when>
					<xsl:otherwise>no</xsl:otherwise>
				</xsl:choose></TD>
			</TR>
			
			<TR CLASS="ImportResultRow">
				<TD STYLE="border:1px solid #404040;padding:5 2 2 5"><B>Export&#160;info</B></TD>
				<TD STYLE="border:1px solid #404040;padding:5 5 10 5"><xsl:choose>
					<xsl:when test="rlz:ExportInfo"><xsl:apply-templates select="rlz:ExportInfo" /></xsl:when>
					<xsl:otherwise>Not available</xsl:otherwise>
				</xsl:choose></TD>
			</TR>
		
			<xsl:if test="rlz:CustomerList">
				<TR CLASS="ImportResultRow">
					<TD STYLE="border:1px solid #404040;padding:5 5 10 5" COLSPAN="2"><SPAN STYLE="overflow-x:scroll"><xsl:apply-templates select="rlz:CustomerList" /></SPAN></TD>
				</TR>
			</xsl:if>

		</TABLE><P/>
	</xsl:template>
	
	
	<xsl:template match="/">
		<HTML>
			<HEAD>
				<TITLE>Reeleezee® Taxonomy</TITLE>
				<STYLE>
					.ExportInfoTable {font:11px normal tahoma,sans-serif;border-collapse:collapse;width:100%;border:1px solid #404040;table-layout:fixed}
					.ExportInfoRow {font:normal 11px tahoma,sans-serif;color:#404040;background-color:#dbe5f1;vertical-align:top}
					
					.ResultTable {font:11px normal tahoma,sans-serif;border-collapse:collapse;width:100%;border:1px solid #404040;table-layout:fixed}
					.ResultRow {font:normal 11px tahoma,sans-serif;color:#404040;background-color:#eaf1dd;vertical-align:top}
				
					.MessageTable {font:11px normal tahoma,sans-serif;border-collapse:collapse;width:100%;border:1px solid #404040;table-layout:fixed}
					.MessageHeader {font:bold 11px tahoma,sans-serif;color:#dbe5f1;background-color:#376091;vertical-align:top}
					.MessageSubHeader {font:bold 11px tahoma,sans-serif;color:#dbe5f1;background-color:#4f81bd;vertical-align:top}
					
					.MessageRowInfo {font:normal 11px tahoma,sans-serif;color:#404040;background-color:#dbe5f1;vertical-align:top}
					.MessageRowWarn {font:normal 11px tahoma,sans-serif;color:#404040;background-color:#fde9d9;vertical-align:top}
					.MessageRowError {font:normal 11px tahoma,sans-serif;color:#404040;background-color:#f2dddc;vertical-align:top}
					
					.ImportResultTable {font:11px normal tahoma,sans-serif;border-collapse:collapse}
					.ImportResultHeader {font:bold 11px tahoma,sans-serif;color:#f0f0f0;background-color:#707070;vertical-align:top}
					.ImportResultRow {font:normal 11px tahoma,sans-serif;color:#404040;background-color:#e8e8e8;vertical-align:top}
					
					.ImportObjectTable {font:11px normal tahoma,sans-serif;border-collapse:collapse;border:1px solid #404040}
					.ImportObjectHeader {font:bold 11px tahoma,sans-serif;color:#eaf1dd;background-color:#4f6228;vertical-align:top}
					.ImportObjectSubHeader {font:bold 11px tahoma,sans-serif;color:#eaf1dd;background-color:#75923c;vertical-align:top}
					.ImportObjectRow {font:normal 11px tahoma,sans-serif;color:#404040;background-color:#eaf1dd;vertical-align:top}
					
					.AddressTable {font:11px normal tahoma,sans-serif;border-collapse:collapse;width:100%;border:1px solid #404040;table-layout:fixed}
					.AddressHeader {font:bold 11px tahoma,sans-serif;color:#dbe5f1;background-color:#4f81bd;vertical-align:top}
					.AddressRow {font:normal 11px tahoma,sans-serif;color:#404040;background-color:#eaf1dd;vertical-align:top}
					
					v\: * { behavior:url(#default#VML); display:inline-block }

				</STYLE>
				<SCRIPT LANGUAGE="JScript">
				<![CDATA[
					function expandOrCollapse(tr)
					{
						var
							table = tr.parentElement,
							i,
							bCollapse = (tr.cells[0].firstChild.innerText == '+');
							
						tr.cells[0].firstChild.innerText = bCollapse ? '-' : '+';
						
						for (i = tr.rowIndex + 1; i < table.rows.length; i++)
						{
							table.rows[i].style.display = bCollapse ? 'block' : 'none';
						}
						
					}
				]]>
				</SCRIPT>
			</HEAD>
			<BODY TOPMARGIN="0" LEFTMARGIN="0" RIGHTMARGIN="0" BOTTOMMARGIN="0" SCROLL="no">
				<TABLE BORDER="0" CELLPADDING="0" CELLSPACING="0" STYLE="width:100%;height:100%">
					<TR HEIGHT="1">
						<TD STYLE="background-color:#f0f0f0;border-bottom:1px solid #c0c0c0">
							<TABLE BORDER="0" CELLPADDING="0" CELLSPACING="0">
								<TR VALIGN="top">
									<TD STYLE="width:10;background-color:#c0c0c0"><SPAN STYLE="width:1;height:1;overflow:hidden">&#160;</SPAN></TD>
									<TD STYLE="padding:4 10 6 5">
										<TABLE BORDER="0" CELLPADDING="0" CELLSPACING="0">
											<TR VALIGN="top">
												<TD STYLE="color:#ec851a;font:bold 24px rockwell, Arial">reeleezee</TD>
												<TD STYLE="color:#787878;font:normal 14px rockwell, Arial">®</TD>
												<TD STYLE="color:#787878;font:bold 24px rockwell, Arial;padding:0 0 0 10">taxonomy</TD>
												<TD VALIGN="bottom" STYLE="color:#909090;font:bold italic 12px rockwell, Arial;padding:0 0 0 8">v <xsl:value-of select="rlz:Reeleezee/@version" /></TD>
											</TR>
										</TABLE>
									</TD>
								</TR>
							</TABLE>
						</TD>
					</TR>
					<TR>
						<TD>
							<SPAN STYLE="padding:10 5 10 10;width:100%;height:100%;overflow:auto">
								<xsl:apply-templates select="/rlz:Reeleezee/rlz:ImportResult" />
								<xsl:apply-templates select="/rlz:Reeleezee/rlz:Import" />
							</SPAN>
						</TD>
					</TR>
					<TR HEIGHT="1">
						<TD STYLE="padding:1 10 1 10;background-color:#f0f0f0;border-top:1px solid #c0c0c0;color:#808080;font:normal 11px tahoma,sans-serif">© Reeleezee 2011</TD>
					</TR>
				</TABLE>
			</BODY>
		</HTML>
	</xsl:template>
</xsl:stylesheet>

  