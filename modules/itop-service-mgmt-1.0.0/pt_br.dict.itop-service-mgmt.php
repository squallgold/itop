<?php
// Copyright (C) 2010 Combodo SARL
//
//   This program is free software; you can redistribute it and/or modify
//   it under the terms of the GNU General Public License as published by
//   the Free Software Foundation; version 3 of the License.
//
//   This program is distributed in the hope that it will be useful,
//   but WITHOUT ANY WARRANTY; without even the implied warranty of
//   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//   GNU General Public License for more details.
//
//   You should have received a copy of the GNU General Public License
//   along with this program; if not, write to the Free Software
//   Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA

/**
 * Localized data
 *
 * @author      Erwan Taloc <erwan.taloc@combodo.com>
 * @author      Romain Quetiez <romain.quetiez@combodo.com>
 * @author      Denis Flaven <denis.flaven@combodo.com>
 * @license     http://www.opensource.org/licenses/gpl-3.0.html LGPL
 */

// Dictionnay conventions
// Class:<class_name>
// Class:<class_name>+
// Class:<class_name>/Attribute:<attribute_code>
// Class:<class_name>/Attribute:<attribute_code>+
// Class:<class_name>/Attribute:<attribute_code>/Value:<value>
// Class:<class_name>/Attribute:<attribute_code>/Value:<value>+
// Class:<class_name>/Stimulus:<stimulus_code>
// Class:<class_name>/Stimulus:<stimulus_code>+


Dict::Add('PT BR', 'Brazilian', 'Brazilian', array(
'Menu:ServiceManagement' => 'Gerenciamento Servi&ccedil;os',
'Menu:ServiceManagement+' => 'Vis&atilde;o geral Gerenciamento Servi&ccedil;os',
'Menu:Service:Overview' => 'Vis&atilde;o geral',
'Menu:Service:Overview+' => '',
'UI-ServiceManagementMenu-ContractsBySrvLevel' => 'Contratos por n&iacute;vel de servi&ccedil;o',
'UI-ServiceManagementMenu-ContractsByStatus' => 'Contratos por status',
'UI-ServiceManagementMenu-ContractsEndingIn30Days' => 'Contratos terminando em menos de 30 dias',

'Menu:ServiceType' => 'Tipos Servi&ccedil;os',
'Menu:ServiceType+' => 'Tipos Servi&ccedil;os',
'Menu:ProviderContract' => 'Contratos Provedor(as)',
'Menu:ProviderContract+' => 'Contratos Provedor',
'Menu:CustomerContract' => 'Contratos Clientes',
'Menu:CustomerContract+' => 'Contratos Clientes',
'Menu:ServiceSubcategory' => 'Sub-categorias Servi&ccedil;os',
'Menu:ServiceSubcategory+' => 'Sub-categorias Servi&ccedil;os',
'Menu:Service' => 'Servi&ccedil;os',
'Menu:Service+' => 'Servi&ccedil;os',
'Menu:SLA' => 'SLAs',
'Menu:SLA+' => 'Service Level Agreements',
'Menu:SLT' => 'SLTs',
'Menu:SLT+' => 'Service Level Targets',

));


/*
	'UI:ServiceManagementMenu' => 'Gestion des Services',
	'UI:ServiceManagementMenu+' => 'Gestion des Services',
	'UI:ServiceManagementMenu:Title' => 'Résumé des services & contrats',
	'UI-ServiceManagementMenu-ContractsBySrvLevel' => 'Contrats par niveau de service',
	'UI-ServiceManagementMenu-ContractsByStatus' => 'Contrats par état',
	'UI-ServiceManagementMenu-ContractsEndingIn30Days' => 'Contrats se terminant dans moins de 30 jours',
*/


//
// Class: Contract
//

Dict::Add('PT BR', 'Brazilian', 'Brazilian', array(
	'Class:Contract' => 'Contratos',
	'Class:Contract+' => '',
	'Class:Contract/Attribute:name' => 'Nome',
	'Class:Contract/Attribute:name+' => '',
	'Class:Contract/Attribute:description' => 'Descri&ccedil;&atilde;o',
	'Class:Contract/Attribute:description+' => '',
	'Class:Contract/Attribute:start_date' => 'Data in&iacute;cio',
	'Class:Contract/Attribute:start_date+' => '',
	'Class:Contract/Attribute:end_date' => 'Data t&eacute;rmino',
	'Class:Contract/Attribute:end_date+' => '',
	'Class:Contract/Attribute:cost' => 'Valor',
	'Class:Contract/Attribute:cost+' => '',
	'Class:Contract/Attribute:cost_currency' => 'Moeda atual',
	'Class:Contract/Attribute:cost_currency+' => '',
	'Class:Contract/Attribute:cost_currency/Value:dollars' => 'Dollars',
	'Class:Contract/Attribute:cost_currency/Value:dollars+' => '',
	'Class:Contract/Attribute:cost_currency/Value:euros' => 'Euros',
	'Class:Contract/Attribute:cost_currency/Value:euros+' => '',
	'Class:Contract/Attribute:cost_unit' => 'Valor unit&aacute;rio',
	'Class:Contract/Attribute:cost_unit+' => '',
	'Class:Contract/Attribute:billing_frequency' => 'Frequ&ecirc;ncia pagamento',
	'Class:Contract/Attribute:billing_frequency+' => '',
	'Class:Contract/Attribute:contact_list' => 'Contatos',
	'Class:Contract/Attribute:contact_list+' => 'Contatos relacionado para ocontrato',
	'Class:Contract/Attribute:document_list' => 'Documentos',
	'Class:Contract/Attribute:document_list+' => 'Documentos anexados para o contrato',
	'Class:Contract/Attribute:ci_list' => 'CIs',
	'Class:Contract/Attribute:ci_list+' => 'CI suportado para o contrato contrato',
	'Class:Contract/Attribute:finalclass' => 'Tipo',
	'Class:Contract/Attribute:finalclass+' => '',
));

//
// Class: ProviderContract
//

Dict::Add('PT BR', 'Brazilian', 'Brazilian', array(
	'Class:ProviderContract' => 'Contrato Provedor',
	'Class:ProviderContract+' => '',
	'Class:ProviderContract/Attribute:provider_id' => 'Provedor',
	'Class:ProviderContract/Attribute:provider_id+' => '',
	'Class:ProviderContract/Attribute:provider_name' => 'Nome Provedor',
	'Class:ProviderContract/Attribute:provider_name+' => '',
	'Class:ProviderContract/Attribute:sla' => 'SLA',
	'Class:ProviderContract/Attribute:sla+' => 'Service Level Agreement',
	'Class:ProviderContract/Attribute:coverage' => 'Cobertura',
	'Class:ProviderContract/Attribute:coverage+' => '',
));

//
// Class: CustomerContract
//

Dict::Add('PT BR', 'Brazilian', 'Brazilian', array(
	'Class:CustomerContract' => 'Contrato Cliente',
	'Class:CustomerContract+' => '',
	'Class:CustomerContract/Attribute:org_id' => 'Cliente',
	'Class:CustomerContract/Attribute:org_id+' => '',
	'Class:CustomerContract/Attribute:org_name' => 'Nome cliente',
	'Class:CustomerContract/Attribute:org_name+' => '',
	'Class:CustomerContract/Attribute:provider_id' => 'Provedor',
	'Class:CustomerContract/Attribute:provider_id+' => '',
	'Class:CustomerContract/Attribute:provider_name' => 'Nome provedor',
	'Class:CustomerContract/Attribute:provider_name+' => '',
	'Class:CustomerContract/Attribute:support_team_id' => 'Equipe suporte',
	'Class:CustomerContract/Attribute:support_team_id+' => '',
	'Class:CustomerContract/Attribute:support_team_name' => 'Equipe suporte',
	'Class:CustomerContract/Attribute:support_team_name+' => '',
	'Class:CustomerContract/Attribute:provider_list' => 'Provedores',
	'Class:CustomerContract/Attribute:provider_list+' => '',
	'Class:CustomerContract/Attribute:sla_list' => 'SLAs',
	'Class:CustomerContract/Attribute:sla_list+' => 'Lista de SLA relacionado ao contrato',
));

//
// Class: lnkContractToSLA
//

Dict::Add('PT BR', 'Brazilian', 'Brazilian', array(
	'Class:lnkContractToSLA' => 'Contrato/SLA',
	'Class:lnkContractToSLA+' => '',
	'Class:lnkContractToSLA/Attribute:contract_id' => 'Contrato',
	'Class:lnkContractToSLA/Attribute:contract_id+' => '',
	'Class:lnkContractToSLA/Attribute:contract_name' => 'Contrato',
	'Class:lnkContractToSLA/Attribute:contract_name+' => '',
	'Class:lnkContractToSLA/Attribute:sla_id' => 'SLA',
	'Class:lnkContractToSLA/Attribute:sla_id+' => '',
	'Class:lnkContractToSLA/Attribute:sla_name' => 'SLA',
	'Class:lnkContractToSLA/Attribute:sla_name+' => '',
	'Class:lnkContractToSLA/Attribute:coverage' => 'Cobertura',
	'Class:lnkContractToSLA/Attribute:coverage+' => '',
));

//
// Class: lnkContractToDoc
//

Dict::Add('PT BR', 'Brazilian', 'Brazilian', array(
	'Class:lnkContractToDoc' => 'Contrato/Doc',
	'Class:lnkContractToDoc+' => '',
	'Class:lnkContractToDoc/Attribute:contract_id' => 'Contrato',
	'Class:lnkContractToDoc/Attribute:contract_id+' => '',
	'Class:lnkContractToDoc/Attribute:contract_name' => 'Contrato',
	'Class:lnkContractToDoc/Attribute:contract_name+' => '',
	'Class:lnkContractToDoc/Attribute:document_id' => 'Documento',
	'Class:lnkContractToDoc/Attribute:document_id+' => '',
	'Class:lnkContractToDoc/Attribute:document_name' => 'Documento',
	'Class:lnkContractToDoc/Attribute:document_name+' => '',
	'Class:lnkContractToDoc/Attribute:document_type' => 'Tipo documento',
	'Class:lnkContractToDoc/Attribute:document_type+' => '',
	'Class:lnkContractToDoc/Attribute:document_status' => 'Status documento',
	'Class:lnkContractToDoc/Attribute:document_status+' => '',
));

//
// Class: lnkContractToContact
//

Dict::Add('PT BR', 'Brazilian', 'Brazilian', array(
	'Class:lnkContractToContact' => 'Contrato/Contato',
	'Class:lnkContractToContact+' => '',
	'Class:lnkContractToContact/Attribute:contract_id' => 'Contrato',
	'Class:lnkContractToContact/Attribute:contract_id+' => '',
	'Class:lnkContractToContact/Attribute:contract_name' => 'Contrato',
	'Class:lnkContractToContact/Attribute:contract_name+' => '',
	'Class:lnkContractToContact/Attribute:contact_id' => 'Contato',
	'Class:lnkContractToContact/Attribute:contact_id+' => '',
	'Class:lnkContractToContact/Attribute:contact_name' => 'Contato',
	'Class:lnkContractToContact/Attribute:contact_name+' => '',
	'Class:lnkContractToContact/Attribute:contact_email' => 'Contato email',
	'Class:lnkContractToContact/Attribute:contact_email+' => '',
	'Class:lnkContractToContact/Attribute:role' => 'Regras',
	'Class:lnkContractToContact/Attribute:role+' => '',
));

//
// Class: lnkContractToCI
//

Dict::Add('PT BR', 'Brazilian', 'Brazilian', array(
	'Class:lnkContractToCI' => 'Contrato/CI',
	'Class:lnkContractToCI+' => '',
	'Class:lnkContractToCI/Attribute:contract_id' => 'Contrato',
	'Class:lnkContractToCI/Attribute:contract_id+' => '',
	'Class:lnkContractToCI/Attribute:contract_name' => 'Contrato',
	'Class:lnkContractToCI/Attribute:contract_name+' => '',
	'Class:lnkContractToCI/Attribute:ci_id' => 'CI',
	'Class:lnkContractToCI/Attribute:ci_id+' => '',
	'Class:lnkContractToCI/Attribute:ci_name' => 'CI',
	'Class:lnkContractToCI/Attribute:ci_name+' => '',
	'Class:lnkContractToCI/Attribute:ci_status' => 'CI status',
	'Class:lnkContractToCI/Attribute:ci_status+' => '',
));

//
// Class: Service
//

Dict::Add('PT BR', 'Brazilian', 'Brazilian', array(
	'Class:Service' => 'Servi&ccedil;o',
	'Class:Service+' => '',
	'Class:Service/Attribute:org_id' => 'Provedor',
	'Class:Service/Attribute:org_id+' => '',
	'Class:Service/Attribute:provider_name' => 'Provedor',
	'Class:Service/Attribute:provider_name+' => '',
	'Class:Service/Attribute:name' => 'Nome',
	'Class:Service/Attribute:name+' => '',
	'Class:Service/Attribute:description' => 'Descri&ccedil;&atilde;o',
	'Class:Service/Attribute:description+' => '',
	'Class:Service/Attribute:type' => 'Tipo',
	'Class:Service/Attribute:type+' => '',
	'Class:Service/Attribute:type/Value:IncidentManagement' => 'Gerenciamento Incidentes',
	'Class:Service/Attribute:type/Value:IncidentManagement+' => 'Gerenciamento Incidentes',
	'Class:Service/Attribute:type/Value:RequestManagement' => 'Gerenciamento Pedidos',
	'Class:Service/Attribute:type/Value:RequestManagement+' => 'Gerenciamento Pedidos',
	'Class:Service/Attribute:status' => 'Status',
	'Class:Service/Attribute:status+' => '',
	'Class:Service/Attribute:status/Value:design' => 'Design',
	'Class:Service/Attribute:status/Value:design+' => '',
	'Class:Service/Attribute:status/Value:obsolete' => 'Obsoleto',
	'Class:Service/Attribute:status/Value:obsolete+' => '',
	'Class:Service/Attribute:status/Value:production' => 'Produ&ccedil;&atilde;o',
	'Class:Service/Attribute:status/Value:production+' => '',
	'Class:Service/Attribute:subcategory_list' => 'Sub-categoria Servi&ccedil;o',
	'Class:Service/Attribute:subcategory_list+' => '',
	'Class:Service/Attribute:sla_list' => 'SLAs',
	'Class:Service/Attribute:sla_list+' => '',
	'Class:Service/Attribute:document_list' => 'Documentos',
	'Class:Service/Attribute:document_list+' => 'Documentos anexado para o servi&ccedil;o',
	'Class:Service/Attribute:contact_list' => 'Contatos',
	'Class:Service/Attribute:contact_list+' => 'Contatos tendo um papel para este servi&ccedil;o',
));

//
// Class: ServiceSubcategory
//

Dict::Add('PT BR', 'Brazilian', 'Brazilian', array(
	'Class:ServiceSubcategory' => 'Sub-categoria Servi&ccedil;o',
	'Class:ServiceSubcategory+' => '',
	'Class:ServiceSubcategory/Attribute:name' => 'Nome',
	'Class:ServiceSubcategory/Attribute:name+' => '',
	'Class:ServiceSubcategory/Attribute:description' => 'Descri&ccedil;&atilde;o',
	'Class:ServiceSubcategory/Attribute:description+' => '',
	'Class:ServiceSubcategory/Attribute:service_id' => 'Servi&ccedil;o',
	'Class:ServiceSubcategory/Attribute:service_id+' => '',
	'Class:ServiceSubcategory/Attribute:service_name' => 'Servi&ccedil;o',
	'Class:ServiceSubcategory/Attribute:service_name+' => '',
));

//
// Class: SLA
//

Dict::Add('PT BR', 'Brazilian', 'Brazilian', array(
	'Class:SLA' => 'SLA',
	'Class:SLA+' => '',
	'Class:SLA/Attribute:name' => 'Nome',
	'Class:SLA/Attribute:name+' => '',
	'Class:SLA/Attribute:service_id' => 'Servi&ccedil;o',
	'Class:SLA/Attribute:service_id+' => '',
	'Class:SLA/Attribute:service_name' => 'Servi&ccedil;o',
	'Class:SLA/Attribute:service_name+' => '',
	'Class:SLA/Attribute:slt_list' => 'SLTs',
	'Class:SLA/Attribute:slt_list+' => 'Lista Service Level Thresholds',
));

//
// Class: SLT
//

Dict::Add('PT BR', 'Brazilian', 'Brazilian', array(
	'Class:SLT' => 'SLT',
	'Class:SLT+' => '',
	'Class:SLT/Attribute:name' => 'Nome',
	'Class:SLT/Attribute:name+' => '',
	'Class:SLT/Attribute:metric' => 'M&eacute;trica',
	'Class:SLT/Attribute:metric+' => '',
	'Class:SLT/Attribute:metric/Value:TTO' => 'TTO',
	'Class:SLT/Attribute:metric/Value:TTO+' => 'TTO',
	'Class:SLT/Attribute:metric/Value:TTR' => 'TTR',
	'Class:SLT/Attribute:metric/Value:TTR+' => 'TTR',
	'Class:SLT/Attribute:ticket_priority' => 'Ticket prioridade',
	'Class:SLT/Attribute:ticket_priority+' => '',
	'Class:SLT/Attribute:ticket_priority/Value:1' => '1',
	'Class:SLT/Attribute:ticket_priority/Value:1+' => '1',
	'Class:SLT/Attribute:ticket_priority/Value:2' => '2',
	'Class:SLT/Attribute:ticket_priority/Value:2+' => '2',
	'Class:SLT/Attribute:ticket_priority/Value:3' => '3',
	'Class:SLT/Attribute:ticket_priority/Value:3+' => '3',
	'Class:SLT/Attribute:value' => 'Valor',
	'Class:SLT/Attribute:value+' => '',
	'Class:SLT/Attribute:value_unit' => 'Unidade',
	'Class:SLT/Attribute:value_unit+' => '',
	'Class:SLT/Attribute:value_unit/Value:days' => 'dias',
	'Class:SLT/Attribute:value_unit/Value:days+' => 'dias',
	'Class:SLT/Attribute:value_unit/Value:hours' => 'horas',
	'Class:SLT/Attribute:value_unit/Value:hours+' => 'horas',
	'Class:SLT/Attribute:value_unit/Value:minutes' => 'minutos',
	'Class:SLT/Attribute:value_unit/Value:minutes+' => 'minutos',
	'Class:SLT/Attribute:sla_list' => 'SLAs',
	'Class:SLT/Attribute:sla_list+' => 'SLAs utilizando o SLT',
));

//
// Class: lnkSLTToSLA
//

Dict::Add('PT BR', 'Brazilian', 'Brazilian', array(
	'Class:lnkSLTToSLA' => 'SLT/SLA',
	'Class:lnkSLTToSLA+' => '',
	'Class:lnkSLTToSLA/Attribute:sla_id' => 'SLA',
	'Class:lnkSLTToSLA/Attribute:sla_id+' => '',
	'Class:lnkSLTToSLA/Attribute:sla_name' => 'SLA',
	'Class:lnkSLTToSLA/Attribute:sla_name+' => '',
	'Class:lnkSLTToSLA/Attribute:slt_id' => 'SLT',
	'Class:lnkSLTToSLA/Attribute:slt_id+' => '',
	'Class:lnkSLTToSLA/Attribute:slt_name' => 'SLT',
	'Class:lnkSLTToSLA/Attribute:slt_name+' => '',
	'Class:lnkSLTToSLA/Attribute:slt_metric' => 'M&eacute;trica',
	'Class:lnkSLTToSLA/Attribute:slt_metric+' => '',
	'Class:lnkSLTToSLA/Attribute:slt_ticket_priority' => 'Ticket prioridade',
	'Class:lnkSLTToSLA/Attribute:slt_ticket_priority+' => '',
	'Class:lnkSLTToSLA/Attribute:slt_value' => 'Valor',
	'Class:lnkSLTToSLA/Attribute:slt_value+' => '',
	'Class:lnkSLTToSLA/Attribute:slt_value_unit' => 'Unidade',
	'Class:lnkSLTToSLA/Attribute:slt_value_unit+' => '',
));

//
// Class: lnkServiceToDoc
//

Dict::Add('PT BR', 'Brazilian', 'Brazilian', array(
	'Class:lnkServiceToDoc' => 'Servi&ccedil;o/Doc',
	'Class:lnkServiceToDoc+' => '',
	'Class:lnkServiceToDoc/Attribute:service_id' => 'Servi&ccedil;o',
	'Class:lnkServiceToDoc/Attribute:service_id+' => '',
	'Class:lnkServiceToDoc/Attribute:service_name' => 'Servi&ccedil;o',
	'Class:lnkServiceToDoc/Attribute:service_name+' => '',
	'Class:lnkServiceToDoc/Attribute:document_id' => 'Documento',
	'Class:lnkServiceToDoc/Attribute:document_id+' => '',
	'Class:lnkServiceToDoc/Attribute:document_name' => 'Documento',
	'Class:lnkServiceToDoc/Attribute:document_name+' => '',
	'Class:lnkServiceToDoc/Attribute:document_type' => 'Tipo documento',
	'Class:lnkServiceToDoc/Attribute:document_type+' => '',
	'Class:lnkServiceToDoc/Attribute:document_status' => 'Status documento',
	'Class:lnkServiceToDoc/Attribute:document_status+' => '',
));

//
// Class: lnkServiceToContact
//

Dict::Add('PT BR', 'Brazilian', 'Brazilian', array(
	'Class:lnkServiceToContact' => 'Servi&ccedil;o/Contato',
	'Class:lnkServiceToContact+' => '',
	'Class:lnkServiceToContact/Attribute:service_id' => 'Servi&ccedil;o',
	'Class:lnkServiceToContact/Attribute:service_id+' => '',
	'Class:lnkServiceToContact/Attribute:service_name' => 'Servi&ccedil;o',
	'Class:lnkServiceToContact/Attribute:service_name+' => '',
	'Class:lnkServiceToContact/Attribute:contact_id' => 'Contato',
	'Class:lnkServiceToContact/Attribute:contact_id+' => '',
	'Class:lnkServiceToContact/Attribute:contact_name' => 'Contato',
	'Class:lnkServiceToContact/Attribute:contact_name+' => '',
	'Class:lnkServiceToContact/Attribute:contact_email' => 'Contato email',
	'Class:lnkServiceToContact/Attribute:contact_email+' => '',
	'Class:lnkServiceToContact/Attribute:role' => 'Regra',
	'Class:lnkServiceToContact/Attribute:role+' => '',
));

//
// Class: lnkServiceToCI
//

Dict::Add('PT BR', 'Brazilian', 'Brazilian', array(
	'Class:lnkServiceToCI' => 'Servi&ccedil;o/CI',
	'Class:lnkServiceToCI+' => '',
	'Class:lnkServiceToCI/Attribute:service_id' => 'Servi&ccedil;o',
	'Class:lnkServiceToCI/Attribute:service_id+' => '',
	'Class:lnkServiceToCI/Attribute:service_name' => 'Servi&ccedil;o',
	'Class:lnkServiceToCI/Attribute:service_name+' => '',
	'Class:lnkServiceToCI/Attribute:ci_id' => 'CI',
	'Class:lnkServiceToCI/Attribute:ci_id+' => '',
	'Class:lnkServiceToCI/Attribute:ci_name' => 'CI',
	'Class:lnkServiceToCI/Attribute:ci_name+' => '',
	'Class:lnkServiceToCI/Attribute:ci_status' => 'CI status',
	'Class:lnkServiceToCI/Attribute:ci_status+' => '',
));


?>
