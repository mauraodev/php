<?php

$string = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<soapenv:Envelope xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/">
   <soap-env:Body xmlns:soap-env="http://schemas.xmlsoap.org/soap/envelope/">
      <man:QueryAssetsResponseMessage xmlns:man="http://www.algartelecom.com.br/SOA/Service/ManageProductInformation">
         <ProductComponent>
            <name>PLANO COMPLETO 2016</name>
            <productStatus>ATIVO</productStatus>
            <ProductOffering>
               <ProductSpecification>
                  <ProductType>
                     <systemIdentifier>VANTIVE</systemIdentifier>
                     <businessLine>TV</businessLine>
                  </ProductType>
               </ProductSpecification>
            </ProductOffering>
            <Agreement>
               <agreementDocumentNumber>35088872</agreementDocumentNumber>
               <subscription />
            </Agreement>
            <id>225027</id>
            <serviceId>034024151</serviceId>
            <ServiceNumber>
               <code />
               <prefix>03402</prefix>
               <number>4151</number>
            </ServiceNumber>
            <customerAccountId>3869285</customerAccountId>
            <Address>
               <City>
                  <Locality>
                     <name>ULA</name>
                     <code />
                  </Locality>
               </City>
            </Address>
            <CustomerBill>
               <CustomerAccount>
                  <accountType>POSPAGO</accountType>
                  <accountStatus>ATIVO</accountStatus>
               </CustomerAccount>
            </CustomerBill>
         </ProductComponent>
         <StandardHeader>
            <ServiceState>
               <stateCode>0</stateCode>
               <errorCode>0</errorCode>
               <errorDesc>VANTIVE: OK - SIEBEL: Cliente não encontrado - ALGAR CRM: SUCESSO</errorDesc>
            </ServiceState>
         </StandardHeader>
      </man:QueryAssetsResponseMessage>
   </soap-env:Body>
</soapenv:Envelope>
XML;

$xml = simplexml_load_string($string, 'SimpleXMLElement', LIBXML_NOCDATA | LIBXML_NOBLANKS);

print_r($xml);