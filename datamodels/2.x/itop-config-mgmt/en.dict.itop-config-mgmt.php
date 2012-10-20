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

//////////////////////////////////////////////////////////////////////
// Relations
//////////////////////////////////////////////////////////////////////
//

Dict::Add('EN US', 'English', 'English', array(
	'Relation:impacts/Description' => 'Elements impacted by',
	'Relation:impacts/VerbUp' => 'Impact...',
	'Relation:impacts/VerbDown' => 'Elements impacted by...',
	'Relation:depends on/Description' => 'Elements this element depends on',
	'Relation:depends on/VerbUp' => 'Depends on...',
	'Relation:depends on/VerbDown' => 'Impacts...',
));


// Dictionnay conventions
// Class:<class_name>
// Class:<class_name>+
// Class:<class_name>/Attribute:<attribute_code>
// Class:<class_name>/Attribute:<attribute_code>+
// Class:<class_name>/Attribute:<attribute_code>/Value:<value>
// Class:<class_name>/Attribute:<attribute_code>/Value:<value>+
// Class:<class_name>/Stimulus:<stimulus_code>
// Class:<class_name>/Stimulus:<stimulus_code>+

//////////////////////////////////////////////////////////////////////
// Classes in 'bizmodel'
//////////////////////////////////////////////////////////////////////
//

// Dictionnay conventions
// Class:<class_name>
// Class:<class_name>+
// Class:<class_name>/Attribute:<attribute_code>
// Class:<class_name>/Attribute:<attribute_code>+
// Class:<class_name>/Attribute:<attribute_code>/Value:<value>
// Class:<class_name>/Attribute:<attribute_code>/Value:<value>+
// Class:<class_name>/Stimulus:<stimulus_code>
// Class:<class_name>/Stimulus:<stimulus_code>+

//////////////////////////////////////////////////////////////////////
// Note: The classes have been grouped by categories: bizmodel
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
// Classes in 'bizmodel'
//////////////////////////////////////////////////////////////////////
//


//
// Class: Organization
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:Organization' => 'Organization',
	'Class:Organization+' => '',
	'Class:Organization/Attribute:name' => 'Name',
	'Class:Organization/Attribute:name+' => 'Common name',
	'Class:Organization/Attribute:code' => 'Code',
	'Class:Organization/Attribute:code+' => 'Organization code (Siret, DUNS,...)',
	'Class:Organization/Attribute:status' => 'Status',
	'Class:Organization/Attribute:status+' => '',
	'Class:Organization/Attribute:status/Value:active' => 'Active',
	'Class:Organization/Attribute:status/Value:active+' => 'Active',
	'Class:Organization/Attribute:status/Value:inactive' => 'Inactive',
	'Class:Organization/Attribute:status/Value:inactive+' => 'Inactive',
	'Class:Organization/Attribute:parent_id' => 'Parent',
	'Class:Organization/Attribute:parent_id+' => 'Parent organization',
	'Class:Organization/Attribute:parent_name' => 'Parent name',
	'Class:Organization/Attribute:parent_name+' => 'Name of the parent organization',
	'Class:Organization/Attribute:deliverymodel_id' => 'Delivery model',
	'Class:Organization/Attribute:deliverymodel_id+' => '',
	'Class:Organization/Attribute:deliverymodel_name' => 'Delivery model name',
	'Class:Organization/Attribute:deliverymodel_name+' => '',
	'Class:Organization/Attribute:parent_id_friendlyname' => 'Parent',
	'Class:Organization/Attribute:parent_id_friendlyname+' => 'Parent organization',
));

//
// Class: Location
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:Location' => 'Location',
	'Class:Location+' => 'Any type of location: Region, Country, City, Site, Building, Floor, Room, Rack,...',
	'Class:Location/Attribute:name' => 'Name',
	'Class:Location/Attribute:name+' => '',
	'Class:Location/Attribute:status' => 'Status',
	'Class:Location/Attribute:status+' => '',
	'Class:Location/Attribute:status/Value:active' => 'Active',
	'Class:Location/Attribute:status/Value:active+' => 'Active',
	'Class:Location/Attribute:status/Value:inactive' => 'Inactive',
	'Class:Location/Attribute:status/Value:inactive+' => 'Inactive',
	'Class:Location/Attribute:org_id' => 'Owner organization',
	'Class:Location/Attribute:org_id+' => '',
	'Class:Location/Attribute:org_name' => 'Name of the owner organization',
	'Class:Location/Attribute:org_name+' => '',
	'Class:Location/Attribute:address' => 'Address',
	'Class:Location/Attribute:address+' => 'Postal address',
	'Class:Location/Attribute:postal_code' => 'Postal code',
	'Class:Location/Attribute:postal_code+' => 'ZIP/Postal code',
	'Class:Location/Attribute:city' => 'City',
	'Class:Location/Attribute:city+' => '',
	'Class:Location/Attribute:country' => 'Country',
	'Class:Location/Attribute:country+' => '',
	'Class:Location/Attribute:physicaldevice_list' => 'Devices',
	'Class:Location/Attribute:physicaldevice_list+' => '',
	'Class:Location/Attribute:person_list' => 'Contacts',
	'Class:Location/Attribute:person_list+' => '',
));

//
// Class: Contact
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:Contact' => 'Contact',
	'Class:Contact+' => '',
	'Class:Contact/Attribute:name' => 'Name',
	'Class:Contact/Attribute:name+' => '',
	'Class:Contact/Attribute:status' => 'Status',
	'Class:Contact/Attribute:status+' => '',
	'Class:Contact/Attribute:status/Value:active' => 'Active',
	'Class:Contact/Attribute:status/Value:active+' => 'Active',
	'Class:Contact/Attribute:status/Value:inactive' => 'Inactive',
	'Class:Contact/Attribute:status/Value:inactive+' => 'Inactive',
	'Class:Contact/Attribute:org_id' => 'Organization',
	'Class:Contact/Attribute:org_id+' => '',
	'Class:Contact/Attribute:org_name' => 'Organization name',
	'Class:Contact/Attribute:org_name+' => '',
	'Class:Contact/Attribute:email' => 'Email',
	'Class:Contact/Attribute:email+' => '',
	'Class:Contact/Attribute:phone' => 'Phone',
	'Class:Contact/Attribute:phone+' => '',
	'Class:Contact/Attribute:notify' => 'Notification',
	'Class:Contact/Attribute:notify+' => '',
	'Class:Contact/Attribute:notify/Value:no' => 'no',
	'Class:Contact/Attribute:notify/Value:no+' => 'no',
	'Class:Contact/Attribute:notify/Value:yes' => 'yes',
	'Class:Contact/Attribute:notify/Value:yes+' => 'yes',
	'Class:Contact/Attribute:function' => 'Function',
	'Class:Contact/Attribute:function+' => '',
	'Class:Contact/Attribute:cis_list' => 'CIs',
	'Class:Contact/Attribute:cis_list+' => '',
	'Class:Contact/Attribute:finalclass' => 'Contact Type',
	'Class:Contact/Attribute:finalclass+' => '',
));

//
// Class: Person
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:Person' => 'Person',
	'Class:Person+' => '',
	'Class:Person/Attribute:first_name' => 'First Name',
	'Class:Person/Attribute:first_name+' => '',
	'Class:Person/Attribute:employee_number' => 'Employee number',
	'Class:Person/Attribute:employee_number+' => '',
	'Class:Person/Attribute:mobile_phone' => 'Mobile phone',
	'Class:Person/Attribute:mobile_phone+' => '',
	'Class:Person/Attribute:location_id' => 'Location',
	'Class:Person/Attribute:location_id+' => '',
	'Class:Person/Attribute:location_name' => 'Location name',
	'Class:Person/Attribute:location_name+' => '',
	'Class:Person/Attribute:manager_id' => 'Manager',
	'Class:Person/Attribute:manager_id+' => '',
	'Class:Person/Attribute:manager_name' => 'Manager name',
	'Class:Person/Attribute:manager_name+' => '',
	'Class:Person/Attribute:team_list' => 'Teams',
	'Class:Person/Attribute:team_list+' => '',
	'Class:Person/Attribute:tickets_list' => 'Tickets',
	'Class:Person/Attribute:tickets_list+' => '',
	'Class:Person/Attribute:manager_id_friendlyname' => 'Manager friendly name',
	'Class:Person/Attribute:manager_id_friendlyname+' => '',
));

//
// Class: Team
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:Team' => 'Team',
	'Class:Team+' => '',
	'Class:Team/Attribute:persons_list' => 'Members',
	'Class:Team/Attribute:persons_list+' => '',
	'Class:Team/Attribute:tickets_list' => 'Tickets',
	'Class:Team/Attribute:tickets_list+' => '',
));

//
// Class: Document
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:Document' => 'Document',
	'Class:Document+' => '',
	'Class:Document/Attribute:name' => 'Name',
	'Class:Document/Attribute:name+' => '',
	'Class:Document/Attribute:org_id' => 'Organization',
	'Class:Document/Attribute:org_id+' => '',
	'Class:Document/Attribute:org_name' => 'Organization name',
	'Class:Document/Attribute:org_name+' => '',
	'Class:Document/Attribute:documenttype_id' => 'Document type',
	'Class:Document/Attribute:documenttype_id+' => '',
	'Class:Document/Attribute:documenttype_name' => 'Document type name',
	'Class:Document/Attribute:documenttype_name+' => '',
	'Class:Document/Attribute:description' => 'Description',
	'Class:Document/Attribute:description+' => '',
	'Class:Document/Attribute:status' => 'Status',
	'Class:Document/Attribute:status+' => '',
	'Class:Document/Attribute:status/Value:draft' => 'Draft',
	'Class:Document/Attribute:status/Value:draft+' => '',
	'Class:Document/Attribute:status/Value:obsolete' => 'Obsolete',
	'Class:Document/Attribute:status/Value:obsolete+' => '',
	'Class:Document/Attribute:status/Value:published' => 'Published',
	'Class:Document/Attribute:status/Value:published+' => '',
	'Class:Document/Attribute:cis_list' => 'CIs',
	'Class:Document/Attribute:cis_list+' => '',
	'Class:Document/Attribute:contracts_list' => 'Contracts',
	'Class:Document/Attribute:contracts_list+' => '',
	'Class:Document/Attribute:services_list' => 'Services',
	'Class:Document/Attribute:services_list+' => '',
	'Class:Document/Attribute:finalclass' => 'Document Type',
	'Class:Document/Attribute:finalclass+' => '',
));

//
// Class: DocumentFile
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:DocumentFile' => 'Document File',
	'Class:DocumentFile+' => '',
	'Class:DocumentFile/Attribute:file' => 'File',
	'Class:DocumentFile/Attribute:file+' => '',
));

//
// Class: DocumentNote
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:DocumentNote' => 'Document Note',
	'Class:DocumentNote+' => '',
	'Class:DocumentNote/Attribute:text' => 'Text',
	'Class:DocumentNote/Attribute:text+' => '',
));

//
// Class: DocumentWeb
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:DocumentWeb' => 'Document Web',
	'Class:DocumentWeb+' => '',
	'Class:DocumentWeb/Attribute:url' => 'URL',
	'Class:DocumentWeb/Attribute:url+' => '',
));

//
// Class: FunctionalCI
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:FunctionalCI' => 'Functional CI',
	'Class:FunctionalCI+' => '',
	'Class:FunctionalCI/Attribute:name' => 'Name',
	'Class:FunctionalCI/Attribute:name+' => '',
	'Class:FunctionalCI/Attribute:description' => 'Description',
	'Class:FunctionalCI/Attribute:description+' => '',
	'Class:FunctionalCI/Attribute:org_id' => 'Organization',
	'Class:FunctionalCI/Attribute:org_id+' => '',
	'Class:FunctionalCI/Attribute:organization_name' => 'Organization name',
	'Class:FunctionalCI/Attribute:organization_name+' => 'Common name',
	'Class:FunctionalCI/Attribute:business_criticity' => 'Business criticity',
	'Class:FunctionalCI/Attribute:business_criticity+' => '',
	'Class:FunctionalCI/Attribute:business_criticity/Value:high' => 'high',
	'Class:FunctionalCI/Attribute:business_criticity/Value:high+' => 'high',
	'Class:FunctionalCI/Attribute:business_criticity/Value:low' => 'low',
	'Class:FunctionalCI/Attribute:business_criticity/Value:low+' => 'low',
	'Class:FunctionalCI/Attribute:business_criticity/Value:medium' => 'medium',
	'Class:FunctionalCI/Attribute:business_criticity/Value:medium+' => 'medium',
	'Class:FunctionalCI/Attribute:move2production' => 'Move to production date',
	'Class:FunctionalCI/Attribute:move2production+' => '',
	'Class:FunctionalCI/Attribute:contacts_list' => 'Contacts',
	'Class:FunctionalCI/Attribute:contacts_list+' => '',
	'Class:FunctionalCI/Attribute:documents_list' => 'Documents',
	'Class:FunctionalCI/Attribute:documents_list+' => '',
	'Class:FunctionalCI/Attribute:applicationsolution_list' => 'Application solutions',
	'Class:FunctionalCI/Attribute:applicationsolution_list+' => '',
	'Class:FunctionalCI/Attribute:providercontracts_list' => 'Provider contracts',
	'Class:FunctionalCI/Attribute:providercontracts_list+' => '',
	'Class:FunctionalCI/Attribute:services_list' => 'Services',
	'Class:FunctionalCI/Attribute:services_list+' => '',
	'Class:FunctionalCI/Attribute:softwares_list' => 'Softwares',
	'Class:FunctionalCI/Attribute:softwares_list+' => '',
	'Class:FunctionalCI/Attribute:tickets_list' => 'Tickets',
	'Class:FunctionalCI/Attribute:tickets_list+' => '',
	'Class:FunctionalCI/Attribute:finalclass' => 'CI Type',
	'Class:FunctionalCI/Attribute:finalclass+' => '',
));

//
// Class: PhysicalDevice
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:PhysicalDevice' => 'Physical Device',
	'Class:PhysicalDevice+' => '',
	'Class:PhysicalDevice/Attribute:serialnumber' => 'Serial number',
	'Class:PhysicalDevice/Attribute:serialnumber+' => '',
	'Class:PhysicalDevice/Attribute:location_id' => 'Location',
	'Class:PhysicalDevice/Attribute:location_id+' => '',
	'Class:PhysicalDevice/Attribute:location_name' => 'Location name',
	'Class:PhysicalDevice/Attribute:location_name+' => '',
	'Class:PhysicalDevice/Attribute:status' => 'Status',
	'Class:PhysicalDevice/Attribute:status+' => '',
	'Class:PhysicalDevice/Attribute:status/Value:implementation' => 'implementation',
	'Class:PhysicalDevice/Attribute:status/Value:implementation+' => 'implementation',
	'Class:PhysicalDevice/Attribute:status/Value:obsolete' => 'obsolete',
	'Class:PhysicalDevice/Attribute:status/Value:obsolete+' => 'obsolete',
	'Class:PhysicalDevice/Attribute:status/Value:production' => 'production',
	'Class:PhysicalDevice/Attribute:status/Value:production+' => 'production',
	'Class:PhysicalDevice/Attribute:status/Value:stock' => 'stock',
	'Class:PhysicalDevice/Attribute:status/Value:stock+' => 'stock',
	'Class:PhysicalDevice/Attribute:brand_id' => 'Brand',
	'Class:PhysicalDevice/Attribute:brand_id+' => '',
	'Class:PhysicalDevice/Attribute:brand_name' => 'Brand name',
	'Class:PhysicalDevice/Attribute:brand_name+' => '',
	'Class:PhysicalDevice/Attribute:model_id' => 'Model',
	'Class:PhysicalDevice/Attribute:model_id+' => '',
	'Class:PhysicalDevice/Attribute:model_name' => 'Model name',
	'Class:PhysicalDevice/Attribute:model_name+' => '',
	'Class:PhysicalDevice/Attribute:asset_number' => 'Asset number',
	'Class:PhysicalDevice/Attribute:asset_number+' => '',
	'Class:PhysicalDevice/Attribute:purchase_date' => 'Purchase date',
	'Class:PhysicalDevice/Attribute:purchase_date+' => '',
	'Class:PhysicalDevice/Attribute:end_of_warranty' => 'End of warranty',
	'Class:PhysicalDevice/Attribute:end_of_warranty+' => '',
));

//
// Class: Rack
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:Rack' => 'Rack',
	'Class:Rack+' => '',
	'Class:Rack/Attribute:nb_u' => 'NB U',
	'Class:Rack/Attribute:nb_u+' => '',
	'Class:Rack/Attribute:device_list' => 'Devices',
	'Class:Rack/Attribute:device_list+' => '',
	'Class:Rack/Attribute:enclosure_list' => 'Enclosures',
	'Class:Rack/Attribute:enclosure_list+' => '',
));

//
// Class: TelephonyCI
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:TelephonyCI' => 'Telephony CI',
	'Class:TelephonyCI+' => '',
	'Class:TelephonyCI/Attribute:phonenumber' => 'Phone number',
	'Class:TelephonyCI/Attribute:phonenumber+' => '',
));

//
// Class: Phone
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:Phone' => 'Phone',
	'Class:Phone+' => '',
));

//
// Class: MobilePhone
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:MobilePhone' => 'Mobile Phone',
	'Class:MobilePhone+' => '',
	'Class:MobilePhone/Attribute:imei' => 'IMEI',
	'Class:MobilePhone/Attribute:imei+' => '',
	'Class:MobilePhone/Attribute:hw_pin' => 'Hardware PIN',
	'Class:MobilePhone/Attribute:hw_pin+' => '',
));

//
// Class: IpPhone
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:IpPhone' => 'IP Phone',
	'Class:IpPhone+' => '',
));

//
// Class: Tablet
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:Tablet' => 'Tablet',
	'Class:Tablet+' => '',
));

//
// Class: ConnectableCI
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:ConnectableCI' => 'Connectable CI',
	'Class:ConnectableCI+' => 'Physical CI',
	'Class:ConnectableCI/Attribute:networkdevice_list' => 'Network devices',
	'Class:ConnectableCI/Attribute:networkdevice_list+' => '',
	'Class:ConnectableCI/Attribute:physicalinterface_list' => 'Network interfaces',
	'Class:ConnectableCI/Attribute:physicalinterface_list+' => '',
));

//
// Class: DatacenterDevice
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:DatacenterDevice' => 'Datacenter Device',
	'Class:DatacenterDevice+' => '',
	'Class:DatacenterDevice/Attribute:rack_id' => 'Rack',
	'Class:DatacenterDevice/Attribute:rack_id+' => '',
	'Class:DatacenterDevice/Attribute:rack_name' => 'Rack name',
	'Class:DatacenterDevice/Attribute:rack_name+' => '',
	'Class:DatacenterDevice/Attribute:enclosure_id' => 'Enclosure',
	'Class:DatacenterDevice/Attribute:enclosure_id+' => '',
	'Class:DatacenterDevice/Attribute:enclosure_name' => 'Enclosure name',
	'Class:DatacenterDevice/Attribute:enclosure_name+' => '',
	'Class:DatacenterDevice/Attribute:nb_u' => 'NB U',
	'Class:DatacenterDevice/Attribute:nb_u+' => '',
	'Class:DatacenterDevice/Attribute:managementip' => 'Management ip',
	'Class:DatacenterDevice/Attribute:managementip+' => '',
	'Class:DatacenterDevice/Attribute:powerA_id' => 'PowerA source',
	'Class:DatacenterDevice/Attribute:powerA_id+' => '',
	'Class:DatacenterDevice/Attribute:powerA_name' => 'PowerA source name',
	'Class:DatacenterDevice/Attribute:powerA_name+' => '',
	'Class:DatacenterDevice/Attribute:powerB_id' => 'PowerB',
	'Class:DatacenterDevice/Attribute:powerB_id+' => '',
	'Class:DatacenterDevice/Attribute:powerB_name' => 'PowerB source name',
	'Class:DatacenterDevice/Attribute:powerB_name+' => '',
	'Class:DatacenterDevice/Attribute:fiberinterfacelist_list' => 'FC ports',
	'Class:DatacenterDevice/Attribute:fiberinterfacelist_list+' => '',
	'Class:DatacenterDevice/Attribute:san_list' => 'SANs',
	'Class:DatacenterDevice/Attribute:san_list+' => '',
));

//
// Class: NetworkDevice
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:NetworkDevice' => 'Network Device',
	'Class:NetworkDevice+' => '',
	'Class:NetworkDevice/Attribute:networkdevicetype_id' => 'Network type',
	'Class:NetworkDevice/Attribute:networkdevicetype_id+' => '',
	'Class:NetworkDevice/Attribute:networkdevicetype_name' => 'Network type name',
	'Class:NetworkDevice/Attribute:networkdevicetype_name+' => '',
	'Class:NetworkDevice/Attribute:connectablecis_list' => 'Devices',
	'Class:NetworkDevice/Attribute:connectablecis_list+' => '',
	'Class:NetworkDevice/Attribute:iosversion_id' => 'IOS version',
	'Class:NetworkDevice/Attribute:iosversion_id+' => '',
	'Class:NetworkDevice/Attribute:iosversion_name' => 'IOS version name',
	'Class:NetworkDevice/Attribute:iosversion_name+' => '',
	'Class:NetworkDevice/Attribute:ram' => 'RAM',
	'Class:NetworkDevice/Attribute:ram+' => '',
));

//
// Class: Server
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:Server' => 'Server',
	'Class:Server+' => '',
	'Class:Server/Attribute:osfamily_id' => 'OS family',
	'Class:Server/Attribute:osfamily_id+' => '',
	'Class:Server/Attribute:osfamily_name' => 'OS family name',
	'Class:Server/Attribute:osfamily_name+' => '',
	'Class:Server/Attribute:osversion_id' => 'OS version',
	'Class:Server/Attribute:osversion_id+' => '',
	'Class:Server/Attribute:osversion_name' => 'OS version name',
	'Class:Server/Attribute:osversion_name+' => '',
	'Class:Server/Attribute:oslicence_id' => 'OS licence',
	'Class:Server/Attribute:oslicence_id+' => '',
	'Class:Server/Attribute:oslicence_name' => 'OS licence name',
	'Class:Server/Attribute:oslicence_name+' => '',
	'Class:Server/Attribute:cpu' => 'CPU',
	'Class:Server/Attribute:cpu+' => '',
	'Class:Server/Attribute:ram' => 'RAM',
	'Class:Server/Attribute:ram+' => '',
	'Class:Server/Attribute:logicalvolumes_list' => 'Logical volumes',
	'Class:Server/Attribute:logicalvolumes_list+' => '',
));

//
// Class: StorageSystem
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:StorageSystem' => 'Storage System',
	'Class:StorageSystem+' => '',
	'Class:StorageSystem/Attribute:logicalvolume_list' => 'Logical volumes',
	'Class:StorageSystem/Attribute:logicalvolume_list+' => '',
));

//
// Class: SANSwitch
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:SANSwitch' => 'SAN Switch',
	'Class:SANSwitch+' => '',
	'Class:SANSwitch/Attribute:datacenterdevice_list' => 'Devices',
	'Class:SANSwitch/Attribute:datacenterdevice_list+' => '',
));

//
// Class: TapeLibrary
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:TapeLibrary' => 'Tape Library',
	'Class:TapeLibrary+' => '',
	'Class:TapeLibrary/Attribute:tapes_list' => 'Tapes',
	'Class:TapeLibrary/Attribute:tapes_list+' => '',
));

//
// Class: NAS
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:NAS' => 'NAS',
	'Class:NAS+' => '',
	'Class:NAS/Attribute:nasfilesystem_list' => 'Filesystems',
	'Class:NAS/Attribute:nasfilesystem_list+' => '',
));

//
// Class: PC
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:PC' => 'PC',
	'Class:PC+' => '',
	'Class:PC/Attribute:osfamily_id' => 'OS family',
	'Class:PC/Attribute:osfamily_id+' => '',
	'Class:PC/Attribute:osfamily_name' => 'OS family name',
	'Class:PC/Attribute:osfamily_name+' => '',
	'Class:PC/Attribute:osversion_id' => 'OS version',
	'Class:PC/Attribute:osversion_id+' => '',
	'Class:PC/Attribute:osversion_name' => 'OS version name',
	'Class:PC/Attribute:osversion_name+' => '',
	'Class:PC/Attribute:cpu' => 'CPU',
	'Class:PC/Attribute:cpu+' => '',
	'Class:PC/Attribute:ram' => 'RAM',
	'Class:PC/Attribute:ram+' => '',
	'Class:PC/Attribute:type' => 'Type',
	'Class:PC/Attribute:type+' => '',
	'Class:PC/Attribute:type/Value:desktop' => 'desktop',
	'Class:PC/Attribute:type/Value:desktop+' => 'desktop',
	'Class:PC/Attribute:type/Value:laptop' => 'laptop',
	'Class:PC/Attribute:type/Value:laptop+' => 'laptop',
));

//
// Class: Printer
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:Printer' => 'Printer',
	'Class:Printer+' => '',
));

//
// Class: ElectricalConnection
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:ElectricalConnection' => 'Electrical Connection',
	'Class:ElectricalConnection+' => '',
));

//
// Class: Arrival
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:Arrival' => 'Arrival',
	'Class:Arrival+' => '',
	'Class:Arrival/Attribute:pdus_list' => 'PDUs',
	'Class:Arrival/Attribute:pdus_list+' => '',
));

//
// Class: PDU
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:PDU' => 'PDU',
	'Class:PDU+' => '',
	'Class:PDU/Attribute:rack_id' => 'Rack',
	'Class:PDU/Attribute:rack_id+' => '',
	'Class:PDU/Attribute:rack_name' => 'Rack name',
	'Class:PDU/Attribute:rack_name+' => '',
	'Class:PDU/Attribute:powerstart_id' => 'Power start',
	'Class:PDU/Attribute:powerstart_id+' => '',
	'Class:PDU/Attribute:powerstart_name' => 'Power start name',
	'Class:PDU/Attribute:powerstart_name+' => '',
));

//
// Class: Peripheral
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:Peripheral' => 'Peripheral',
	'Class:Peripheral+' => '',
));

//
// Class: Enclosure
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:Enclosure' => 'Enclosure',
	'Class:Enclosure+' => '',
	'Class:Enclosure/Attribute:rack_id' => 'Rack',
	'Class:Enclosure/Attribute:rack_id+' => '',
	'Class:Enclosure/Attribute:rack_name' => 'Rack name',
	'Class:Enclosure/Attribute:rack_name+' => '',
	'Class:Enclosure/Attribute:nb_u' => 'NB U',
	'Class:Enclosure/Attribute:nb_u+' => '',
	'Class:Enclosure/Attribute:device_list' => 'Devices',
	'Class:Enclosure/Attribute:device_list+' => '',
));

//
// Class: ApplicationSolution
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:ApplicationSolution' => 'Application Solution',
	'Class:ApplicationSolution+' => '',
	'Class:ApplicationSolution/Attribute:functionalcis_list' => 'CIs',
	'Class:ApplicationSolution/Attribute:functionalcis_list+' => '',
	'Class:ApplicationSolution/Attribute:businessprocess_list' => 'Business processes',
	'Class:ApplicationSolution/Attribute:businessprocess_list+' => '',
	'Class:ApplicationSolution/Attribute:status' => 'Status',
	'Class:ApplicationSolution/Attribute:status+' => '',
	'Class:ApplicationSolution/Attribute:status/Value:active' => 'active',
	'Class:ApplicationSolution/Attribute:status/Value:active+' => 'active',
	'Class:ApplicationSolution/Attribute:status/Value:inactive' => 'inactive',
	'Class:ApplicationSolution/Attribute:status/Value:inactive+' => 'inactive',
));

//
// Class: BusinessProcess
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:BusinessProcess' => 'Business Process',
	'Class:BusinessProcess+' => '',
	'Class:BusinessProcess/Attribute:applicationsolutions_list' => 'Application solutions',
	'Class:BusinessProcess/Attribute:applicationsolutions_list+' => '',
	'Class:BusinessProcess/Attribute:status' => 'Status',
	'Class:BusinessProcess/Attribute:status+' => '',
	'Class:BusinessProcess/Attribute:status/Value:active' => 'active',
	'Class:BusinessProcess/Attribute:status/Value:active+' => 'active',
	'Class:BusinessProcess/Attribute:status/Value:inactive' => 'inactive',
	'Class:BusinessProcess/Attribute:status/Value:inactive+' => 'inactive',
));

//
// Class: SoftwareInstance
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:SoftwareInstance' => 'Software Instance',
	'Class:SoftwareInstance+' => '',
	'Class:SoftwareInstance/Attribute:system_id' => 'System',
	'Class:SoftwareInstance/Attribute:system_id+' => '',
	'Class:SoftwareInstance/Attribute:system_name' => 'System name',
	'Class:SoftwareInstance/Attribute:system_name+' => '',
	'Class:SoftwareInstance/Attribute:software_id' => 'Software',
	'Class:SoftwareInstance/Attribute:software_id+' => '',
	'Class:SoftwareInstance/Attribute:software_name' => 'Software name',
	'Class:SoftwareInstance/Attribute:software_name+' => '',
	'Class:SoftwareInstance/Attribute:softwarelicence_id' => 'Software licence',
	'Class:SoftwareInstance/Attribute:softwarelicence_id+' => '',
	'Class:SoftwareInstance/Attribute:softwarelicence_name' => 'Software licence name',
	'Class:SoftwareInstance/Attribute:softwarelicence_name+' => '',
	'Class:SoftwareInstance/Attribute:path' => 'Path',
	'Class:SoftwareInstance/Attribute:path+' => '',
	'Class:SoftwareInstance/Attribute:status' => 'Status',
	'Class:SoftwareInstance/Attribute:status+' => '',
	'Class:SoftwareInstance/Attribute:status/Value:active' => 'active',
	'Class:SoftwareInstance/Attribute:status/Value:active+' => 'active',
	'Class:SoftwareInstance/Attribute:status/Value:inactive' => 'inactive',
	'Class:SoftwareInstance/Attribute:status/Value:inactive+' => 'inactive',
));

//
// Class: Middleware
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:Middleware' => 'Middleware',
	'Class:Middleware+' => '',
	'Class:Middleware/Attribute:middlewareinstance_list' => 'Middleware instances',
	'Class:Middleware/Attribute:middlewareinstance_list+' => '',
));

//
// Class: DBserver
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:DBserver' => 'DB server',
	'Class:DBserver+' => '',
	'Class:DBserver/Attribute:dbschema_list' => 'DB schemas',
	'Class:DBserver/Attribute:dbschema_list+' => '',
));

//
// Class: Webserver
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:Webserver' => 'Web server',
	'Class:Webserver+' => '',
	'Class:Webserver/Attribute:webapp_list' => 'Web applications',
	'Class:Webserver/Attribute:webapp_list+' => '',
));

//
// Class: PCSoftware
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:PCSoftware' => 'PC software',
	'Class:PCSoftware+' => '',
));

//
// Class: OtherSoftware
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:OtherSoftware' => 'Other Software',
	'Class:OtherSoftware+' => '',
));

//
// Class: MiddlewareInstance
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:MiddlewareInstance' => 'Middleware Instance',
	'Class:MiddlewareInstance+' => '',
	'Class:MiddlewareInstance/Attribute:middleware_id' => 'Middleware',
	'Class:MiddlewareInstance/Attribute:middleware_id+' => '',
	'Class:MiddlewareInstance/Attribute:middleware_name' => 'Middleware name',
	'Class:MiddlewareInstance/Attribute:middleware_name+' => '',
));

//
// Class: DatabaseSchema
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:DatabaseSchema' => 'Database Schema',
	'Class:DatabaseSchema+' => '',
	'Class:DatabaseSchema/Attribute:dbserver_id' => 'DB server',
	'Class:DatabaseSchema/Attribute:dbserver_id+' => '',
	'Class:DatabaseSchema/Attribute:dbserver_name' => 'DB server name',
	'Class:DatabaseSchema/Attribute:dbserver_name+' => '',
));

//
// Class: WebApplication
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:WebApplication' => 'Web Application',
	'Class:WebApplication+' => '',
	'Class:WebApplication/Attribute:webserver_id' => 'Web server',
	'Class:WebApplication/Attribute:webserver_id+' => '',
	'Class:WebApplication/Attribute:webserver_name' => 'Web server name',
	'Class:WebApplication/Attribute:webserver_name+' => '',
	'Class:WebApplication/Attribute:url' => 'URL',
	'Class:WebApplication/Attribute:url+' => '',
));

//
// Class: VirtualDevice
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:VirtualDevice' => 'Virtual Device',
	'Class:VirtualDevice+' => '',
	'Class:VirtualDevice/Attribute:status' => 'Status',
	'Class:VirtualDevice/Attribute:status+' => '',
	'Class:VirtualDevice/Attribute:status/Value:implementation' => 'implementation',
	'Class:VirtualDevice/Attribute:status/Value:implementation+' => 'implementation',
	'Class:VirtualDevice/Attribute:status/Value:obsolete' => 'obsolete',
	'Class:VirtualDevice/Attribute:status/Value:obsolete+' => 'obsolete',
	'Class:VirtualDevice/Attribute:status/Value:production' => 'production',
	'Class:VirtualDevice/Attribute:status/Value:production+' => 'production',
	'Class:VirtualDevice/Attribute:status/Value:stock' => 'stock',
	'Class:VirtualDevice/Attribute:status/Value:stock+' => 'stock',
	'Class:VirtualDevice/Attribute:logicalvolumes_list' => 'Logical volumes',
	'Class:VirtualDevice/Attribute:logicalvolumes_list+' => '',
));

//
// Class: VirtualHost
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:VirtualHost' => 'Virtual Host',
	'Class:VirtualHost+' => '',
	'Class:VirtualHost/Attribute:virtualmachine_list' => 'Virtual machines',
	'Class:VirtualHost/Attribute:virtualmachine_list+' => '',
));

//
// Class: Hypervisor
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:Hypervisor' => 'Hypervisor',
	'Class:Hypervisor+' => '',
	'Class:Hypervisor/Attribute:farm_id' => 'Farm',
	'Class:Hypervisor/Attribute:farm_id+' => '',
	'Class:Hypervisor/Attribute:farm_name' => 'Farm name',
	'Class:Hypervisor/Attribute:farm_name+' => '',
	'Class:Hypervisor/Attribute:server_id' => 'Server',
	'Class:Hypervisor/Attribute:server_id+' => '',
	'Class:Hypervisor/Attribute:server_name' => 'Server name',
	'Class:Hypervisor/Attribute:server_name+' => '',
));

//
// Class: Farm
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:Farm' => 'Farm',
	'Class:Farm+' => '',
	'Class:Farm/Attribute:hypervisor_list' => 'Hypervisors',
	'Class:Farm/Attribute:hypervisor_list+' => '',
));

//
// Class: VirtualMachine
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:VirtualMachine' => 'Virtual Machine',
	'Class:VirtualMachine+' => '',
	'Class:VirtualMachine/Attribute:virtualhost_id' => 'Virtual host',
	'Class:VirtualMachine/Attribute:virtualhost_id+' => '',
	'Class:VirtualMachine/Attribute:virtualhost_name' => 'Virtual host name',
	'Class:VirtualMachine/Attribute:virtualhost_name+' => '',
	'Class:VirtualMachine/Attribute:osfamily_id' => 'OS family',
	'Class:VirtualMachine/Attribute:osfamily_id+' => '',
	'Class:VirtualMachine/Attribute:osfamily_name' => 'OS family name',
	'Class:VirtualMachine/Attribute:osfamily_name+' => '',
	'Class:VirtualMachine/Attribute:osversion_id' => 'OS version',
	'Class:VirtualMachine/Attribute:osversion_id+' => '',
	'Class:VirtualMachine/Attribute:osversion_name' => 'OS version name',
	'Class:VirtualMachine/Attribute:osversion_name+' => '',
	'Class:VirtualMachine/Attribute:oslicence_id' => 'OS licence',
	'Class:VirtualMachine/Attribute:oslicence_id+' => '',
	'Class:VirtualMachine/Attribute:oslicence_name' => 'OS licence name',
	'Class:VirtualMachine/Attribute:oslicence_name+' => '',
	'Class:VirtualMachine/Attribute:cpu' => 'CPU',
	'Class:VirtualMachine/Attribute:cpu+' => '',
	'Class:VirtualMachine/Attribute:ram' => 'RAM',
	'Class:VirtualMachine/Attribute:ram+' => '',
	'Class:VirtualMachine/Attribute:logicalinterface_list' => 'Network Interfaces',
	'Class:VirtualMachine/Attribute:logicalinterface_list+' => '',
));

//
// Class: LogicalVolume
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:LogicalVolume' => 'Logical Volume',
	'Class:LogicalVolume+' => '',
	'Class:LogicalVolume/Attribute:name' => 'Name',
	'Class:LogicalVolume/Attribute:name+' => '',
	'Class:LogicalVolume/Attribute:lun_id' => 'LUN ID',
	'Class:LogicalVolume/Attribute:lun_id+' => '',
	'Class:LogicalVolume/Attribute:description' => 'Description',
	'Class:LogicalVolume/Attribute:description+' => '',
	'Class:LogicalVolume/Attribute:raid_level' => 'Raid level',
	'Class:LogicalVolume/Attribute:raid_level+' => '',
	'Class:LogicalVolume/Attribute:size' => 'Size',
	'Class:LogicalVolume/Attribute:size+' => '',
	'Class:LogicalVolume/Attribute:storagesystem_id' => 'Storage system',
	'Class:LogicalVolume/Attribute:storagesystem_id+' => '',
	'Class:LogicalVolume/Attribute:storagesystem_name' => 'Storage system name',
	'Class:LogicalVolume/Attribute:storagesystem_name+' => '',
	'Class:LogicalVolume/Attribute:servers_list' => 'Servers',
	'Class:LogicalVolume/Attribute:servers_list+' => '',
	'Class:LogicalVolume/Attribute:virtualdevices_list' => 'Virtual devices',
	'Class:LogicalVolume/Attribute:virtualdevices_list+' => '',
));

//
// Class: lnkServerToVolume
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:lnkServerToVolume' => 'Link Server / Volume',
	'Class:lnkServerToVolume+' => '',
	'Class:lnkServerToVolume/Attribute:volume_id' => 'Volume',
	'Class:lnkServerToVolume/Attribute:volume_id+' => '',
	'Class:lnkServerToVolume/Attribute:volume_name' => 'Volume name',
	'Class:lnkServerToVolume/Attribute:volume_name+' => '',
	'Class:lnkServerToVolume/Attribute:server_id' => 'Server',
	'Class:lnkServerToVolume/Attribute:server_id+' => '',
	'Class:lnkServerToVolume/Attribute:server_name' => 'Server name',
	'Class:lnkServerToVolume/Attribute:server_name+' => '',
	'Class:lnkServerToVolume/Attribute:size_used' => 'Size used',
	'Class:lnkServerToVolume/Attribute:size_used+' => '',
));

//
// Class: lnkVirtualDeviceToVolume
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:lnkVirtualDeviceToVolume' => 'Link Virtual Device / Volume',
	'Class:lnkVirtualDeviceToVolume+' => '',
	'Class:lnkVirtualDeviceToVolume/Attribute:volume_id' => 'Volume',
	'Class:lnkVirtualDeviceToVolume/Attribute:volume_id+' => '',
	'Class:lnkVirtualDeviceToVolume/Attribute:volume_name' => 'Volume name',
	'Class:lnkVirtualDeviceToVolume/Attribute:volume_name+' => '',
	'Class:lnkVirtualDeviceToVolume/Attribute:virtualdevice_id' => 'Virtual device',
	'Class:lnkVirtualDeviceToVolume/Attribute:virtualdevice_id+' => '',
	'Class:lnkVirtualDeviceToVolume/Attribute:virtualdevice_name' => 'Virtual device name',
	'Class:lnkVirtualDeviceToVolume/Attribute:virtualdevice_name+' => '',
	'Class:lnkVirtualDeviceToVolume/Attribute:size_used' => 'Size used',
	'Class:lnkVirtualDeviceToVolume/Attribute:size_used+' => '',
));

//
// Class: lnkSanToDatacenterDevice
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:lnkSanToDatacenterDevice' => 'Link San/ Datacenter Device',
	'Class:lnkSanToDatacenterDevice+' => '',
	'Class:lnkSanToDatacenterDevice/Attribute:san_id' => 'SAN switch',
	'Class:lnkSanToDatacenterDevice/Attribute:san_id+' => '',
	'Class:lnkSanToDatacenterDevice/Attribute:san_name' => 'SAN switch name',
	'Class:lnkSanToDatacenterDevice/Attribute:san_name+' => '',
	'Class:lnkSanToDatacenterDevice/Attribute:datacenterdevice_id' => 'Device',
	'Class:lnkSanToDatacenterDevice/Attribute:datacenterdevice_id+' => '',
	'Class:lnkSanToDatacenterDevice/Attribute:datacenterdevice_name' => 'Device name',
	'Class:lnkSanToDatacenterDevice/Attribute:datacenterdevice_name+' => '',
	'Class:lnkSanToDatacenterDevice/Attribute:san_port' => 'SAN fc',
	'Class:lnkSanToDatacenterDevice/Attribute:san_port+' => '',
	'Class:lnkSanToDatacenterDevice/Attribute:datacenterdevice_port' => 'Device fc',
	'Class:lnkSanToDatacenterDevice/Attribute:datacenterdevice_port+' => '',
));

//
// Class: Tape
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:Tape' => 'Tape',
	'Class:Tape+' => '',
	'Class:Tape/Attribute:name' => 'Name',
	'Class:Tape/Attribute:name+' => '',
	'Class:Tape/Attribute:description' => 'Description',
	'Class:Tape/Attribute:description+' => '',
	'Class:Tape/Attribute:size' => 'Size',
	'Class:Tape/Attribute:size+' => '',
	'Class:Tape/Attribute:tapelibrary_id' => 'Tape library',
	'Class:Tape/Attribute:tapelibrary_id+' => '',
	'Class:Tape/Attribute:tapelibrary_name' => 'Tape library name',
	'Class:Tape/Attribute:tapelibrary_name+' => '',
));

//
// Class: NasFileSystem
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:NasFileSystem' => 'NAS FileSystem',
	'Class:NasFileSystem+' => '',
	'Class:NasFileSystem/Attribute:name' => 'Name',
	'Class:NasFileSystem/Attribute:name+' => '',
	'Class:NasFileSystem/Attribute:description' => 'Description',
	'Class:NasFileSystem/Attribute:description+' => '',
	'Class:NasFileSystem/Attribute:raid_level' => 'Raid level',
	'Class:NasFileSystem/Attribute:raid_level+' => '',
	'Class:NasFileSystem/Attribute:size' => 'Size',
	'Class:NasFileSystem/Attribute:size+' => '',
	'Class:NasFileSystem/Attribute:nas_id' => 'NAS',
	'Class:NasFileSystem/Attribute:nas_id+' => '',
	'Class:NasFileSystem/Attribute:nas_name' => 'NAS name',
	'Class:NasFileSystem/Attribute:nas_name+' => '',
));

//
// Class: Software
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:Software' => 'Software',
	'Class:Software+' => '',
	'Class:Software/Attribute:name' => 'Name',
	'Class:Software/Attribute:name+' => '',
	'Class:Software/Attribute:vendor' => 'vendor',
	'Class:Software/Attribute:vendor+' => '',
	'Class:Software/Attribute:version' => 'Version',
	'Class:Software/Attribute:version+' => '',
	'Class:Software/Attribute:documents_list' => 'Documents',
	'Class:Software/Attribute:documents_list+' => '',
	'Class:Software/Attribute:type' => 'Type',
	'Class:Software/Attribute:type+' => '',
	'Class:Software/Attribute:type/Value:DBserver' => 'DB server',
	'Class:Software/Attribute:type/Value:DBserver+' => 'DB server',
	'Class:Software/Attribute:type/Value:Middleware' => 'Middleware',
	'Class:Software/Attribute:type/Value:Middleware+' => 'Middleware',
	'Class:Software/Attribute:type/Value:OtherSoftware' => 'Other Software',
	'Class:Software/Attribute:type/Value:OtherSoftware+' => 'Other Software',
	'Class:Software/Attribute:type/Value:PCSoftware' => 'PC software',
	'Class:Software/Attribute:type/Value:PCSoftware+' => 'PC software',
	'Class:Software/Attribute:type/Value:Webserver' => 'Web server',
	'Class:Software/Attribute:type/Value:Webserver+' => 'Web server',
	'Class:Software/Attribute:softwareinstance_list' => 'Software instances',
	'Class:Software/Attribute:softwareinstance_list+' => '',
	'Class:Software/Attribute:softwarepatch_list' => 'Software patches',
	'Class:Software/Attribute:softwarepatch_list+' => '',
	'Class:Software/Attribute:softwarelicence_list' => 'Software licences',
	'Class:Software/Attribute:softwarelicence_list+' => '',
));

//
// Class: Patch
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:Patch' => 'Patch',
	'Class:Patch+' => '',
	'Class:Patch/Attribute:name' => 'Name',
	'Class:Patch/Attribute:name+' => '',
	'Class:Patch/Attribute:documents_list' => 'Documents',
	'Class:Patch/Attribute:documents_list+' => '',
	'Class:Patch/Attribute:description' => 'Description',
	'Class:Patch/Attribute:description+' => '',
	'Class:Patch/Attribute:finalclass' => 'Type',
	'Class:Patch/Attribute:finalclass+' => '',
));

//
// Class: OSpatch
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:OSpatch' => 'OS patch',
	'Class:OSpatch+' => '',
	'Class:OSpatch/Attribute:functionalcis_list' => 'Devices',
	'Class:OSpatch/Attribute:functionalcis_list+' => '',
	'Class:OSpatch/Attribute:osversion_id' => 'OS version',
	'Class:OSpatch/Attribute:osversion_id+' => '',
	'Class:OSpatch/Attribute:osversion_name' => 'OS version name',
	'Class:OSpatch/Attribute:osversion_name+' => '',
));

//
// Class: SoftwarePatch
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:SoftwarePatch' => 'Software Patch',
	'Class:SoftwarePatch+' => '',
	'Class:SoftwarePatch/Attribute:software_id' => 'Software',
	'Class:SoftwarePatch/Attribute:software_id+' => '',
	'Class:SoftwarePatch/Attribute:software_name' => 'Software name',
	'Class:SoftwarePatch/Attribute:software_name+' => '',
	'Class:SoftwarePatch/Attribute:softwareinstances_list' => 'Software instances',
	'Class:SoftwarePatch/Attribute:softwareinstances_list+' => '',
));

//
// Class: Licence
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:Licence' => 'License',
	'Class:Licence+' => '',
	'Class:Licence/Attribute:name' => 'Name',
	'Class:Licence/Attribute:name+' => '',
	'Class:Licence/Attribute:documents_list' => 'Documents',
	'Class:Licence/Attribute:documents_list+' => '',
	'Class:Licence/Attribute:org_id' => 'Organization',
	'Class:Licence/Attribute:org_id+' => '',
	'Class:Licence/Attribute:organization_name' => 'Organization name',
	'Class:Licence/Attribute:organization_name+' => 'Common name',
	'Class:Licence/Attribute:usage_limit' => 'Usage limit',
	'Class:Licence/Attribute:usage_limit+' => '',
	'Class:Licence/Attribute:description' => 'Description',
	'Class:Licence/Attribute:description+' => '',
	'Class:Licence/Attribute:start_date' => 'Start date',
	'Class:Licence/Attribute:start_date+' => '',
	'Class:Licence/Attribute:end_date' => 'End date',
	'Class:Licence/Attribute:end_date+' => '',
	'Class:Licence/Attribute:licence_key' => 'Key',
	'Class:Licence/Attribute:licence_key+' => '',
	'Class:Licence/Attribute:finalclass' => 'Type',
	'Class:Licence/Attribute:finalclass+' => '',
));

//
// Class: OsLicence
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:OsLicence' => 'OS Licence',
	'Class:OsLicence+' => '',
	'Class:OsLicence/Attribute:osversion_id' => 'OS version',
	'Class:OsLicence/Attribute:osversion_id+' => '',
	'Class:OsLicence/Attribute:osversion_name' => 'OS version name',
	'Class:OsLicence/Attribute:osversion_name+' => '',
	'Class:OsLicence/Attribute:virtualmachines_list' => 'Virtual machines',
	'Class:OsLicence/Attribute:virtualmachines_list+' => '',
	'Class:OsLicence/Attribute:servers_list' => 'servers',
	'Class:OsLicence/Attribute:servers_list+' => '',
));

//
// Class: SoftwareLicence
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:SoftwareLicence' => 'Software Licence',
	'Class:SoftwareLicence+' => '',
	'Class:SoftwareLicence/Attribute:software_id' => 'Software',
	'Class:SoftwareLicence/Attribute:software_id+' => '',
	'Class:SoftwareLicence/Attribute:software_name' => 'Software name',
	'Class:SoftwareLicence/Attribute:software_name+' => '',
	'Class:SoftwareLicence/Attribute:softwareinstance_list' => 'Software instances',
	'Class:SoftwareLicence/Attribute:softwareinstance_list+' => '',
));

//
// Class: lnkDocumentToLicence
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:lnkDocumentToLicence' => 'Link Document / Licence',
	'Class:lnkDocumentToLicence+' => '',
	'Class:lnkDocumentToLicence/Attribute:licence_id' => 'Licence',
	'Class:lnkDocumentToLicence/Attribute:licence_id+' => '',
	'Class:lnkDocumentToLicence/Attribute:licence_name' => 'Licence name',
	'Class:lnkDocumentToLicence/Attribute:licence_name+' => '',
	'Class:lnkDocumentToLicence/Attribute:document_id' => 'Document',
	'Class:lnkDocumentToLicence/Attribute:document_id+' => '',
	'Class:lnkDocumentToLicence/Attribute:document_name' => 'Document name',
	'Class:lnkDocumentToLicence/Attribute:document_name+' => '',
));

//
// Class: Typology
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:Typology' => 'Typology',
	'Class:Typology+' => '',
	'Class:Typology/Attribute:name' => 'Name',
	'Class:Typology/Attribute:name+' => '',
	'Class:Typology/Attribute:finalclass' => 'Type',
	'Class:Typology/Attribute:finalclass+' => '',
));

//
// Class: OSversion
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:OSversion' => 'OS version',
	'Class:OSversion+' => '',
	'Class:OSversion/Attribute:osfamily_id' => 'OS family',
	'Class:OSversion/Attribute:osfamily_id+' => '',
	'Class:OSversion/Attribute:osfamily_name' => 'OS family name',
	'Class:OSversion/Attribute:osfamily_name+' => '',
));

//
// Class: OSfamily
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:OSfamily' => 'OS family',
	'Class:OSfamily+' => '',
));

//
// Class: DocumentType
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:DocumentType' => 'Document Type',
	'Class:DocumentType+' => '',
));

//
// Class: ContactType
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:ContactType' => 'Contact Type',
	'Class:ContactType+' => '',
));

//
// Class: Brand
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:Brand' => 'Brand',
	'Class:Brand+' => '',
	'Class:Brand/Attribute:physicaldevices_list' => 'Physical devices',
	'Class:Brand/Attribute:physicaldevices_list+' => '',
));

//
// Class: Model
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:Model' => 'Model',
	'Class:Model+' => '',
	'Class:Model/Attribute:brand_id' => 'Brand',
	'Class:Model/Attribute:brand_id+' => '',
	'Class:Model/Attribute:brand_name' => 'Brand name',
	'Class:Model/Attribute:brand_name+' => '',
	'Class:Model/Attribute:Type' => 'Device type',
	'Class:Model/Attribute:Type+' => '',
	'Class:Model/Attribute:Type/Value:Arrival' => 'Arrival',
	'Class:Model/Attribute:Type/Value:Arrival+' => 'Arrival',
	'Class:Model/Attribute:Type/Value:DiskArray' => 'DiskArray',
	'Class:Model/Attribute:Type/Value:DiskArray+' => 'DiskArray',
	'Class:Model/Attribute:Type/Value:Enclosure' => 'Enclosure',
	'Class:Model/Attribute:Type/Value:Enclosure+' => 'Enclosure',
	'Class:Model/Attribute:Type/Value:IpPhone' => 'Ip Phone',
	'Class:Model/Attribute:Type/Value:IpPhone+' => 'Ip Phone',
	'Class:Model/Attribute:Type/Value:MobilePhone' => 'Mobile Phone',
	'Class:Model/Attribute:Type/Value:MobilePhone+' => 'Mobile Phone',
	'Class:Model/Attribute:Type/Value:NAS' => 'NAS',
	'Class:Model/Attribute:Type/Value:NAS+' => 'NAS',
	'Class:Model/Attribute:Type/Value:NetworkDevice' => 'Network Device',
	'Class:Model/Attribute:Type/Value:NetworkDevice+' => 'Network Device',
	'Class:Model/Attribute:Type/Value:PC' => 'PC',
	'Class:Model/Attribute:Type/Value:PC+' => 'PC',
	'Class:Model/Attribute:Type/Value:PDU' => 'PDU',
	'Class:Model/Attribute:Type/Value:PDU+' => 'PDU',
	'Class:Model/Attribute:Type/Value:Peripheral' => 'Peripheral',
	'Class:Model/Attribute:Type/Value:Peripheral+' => 'Peripheral',
	'Class:Model/Attribute:Type/Value:Printer' => 'Printer',
	'Class:Model/Attribute:Type/Value:Printer+' => 'Printer',
	'Class:Model/Attribute:Type/Value:Rack' => 'Rack',
	'Class:Model/Attribute:Type/Value:Rack+' => 'Rack',
	'Class:Model/Attribute:Type/Value:SANswitch' => 'SAN switch',
	'Class:Model/Attribute:Type/Value:SANswitch+' => 'SAN switch',
	'Class:Model/Attribute:Type/Value:Server' => 'Server',
	'Class:Model/Attribute:Type/Value:Server+' => 'Server',
	'Class:Model/Attribute:Type/Value:StorageSystem' => 'Storage System',
	'Class:Model/Attribute:Type/Value:StorageSystem+' => 'Storage System',
	'Class:Model/Attribute:Type/Value:Tablet' => 'Tablet',
	'Class:Model/Attribute:Type/Value:Tablet+' => 'Tablet',
	'Class:Model/Attribute:Type/Value:TapeLibrary' => 'Tape Library',
	'Class:Model/Attribute:Type/Value:TapeLibrary+' => 'Tape Library',
	'Class:Model/Attribute:Type/Value:Telephone' => 'Telephone',
	'Class:Model/Attribute:Type/Value:Telephone+' => 'Telephone',
	'Class:Model/Attribute:physicaldevices_list' => 'Physical devices',
	'Class:Model/Attribute:physicaldevices_list+' => '',
));

//
// Class: NetworkDeviceType
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:NetworkDeviceType' => 'Network Device Type',
	'Class:NetworkDeviceType+' => '',
	'Class:NetworkDeviceType/Attribute:networkdevicesdevices_list' => 'Network devices',
	'Class:NetworkDeviceType/Attribute:networkdevicesdevices_list+' => '',
));

//
// Class: IOSversion
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:IOSversion' => 'IOS version',
	'Class:IOSversion+' => '',
	'Class:IOSversion/Attribute:brand_id' => 'Brand',
	'Class:IOSversion/Attribute:brand_id+' => '',
	'Class:IOSversion/Attribute:brand_name' => 'Brand name',
	'Class:IOSversion/Attribute:brand_name+' => '',
));

//
// Class: lnkDocumentToPatch
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:lnkDocumentToPatch' => 'Link Document / Patch',
	'Class:lnkDocumentToPatch+' => '',
	'Class:lnkDocumentToPatch/Attribute:patch_id' => 'Patch',
	'Class:lnkDocumentToPatch/Attribute:patch_id+' => '',
	'Class:lnkDocumentToPatch/Attribute:patch_name' => 'Patch name',
	'Class:lnkDocumentToPatch/Attribute:patch_name+' => '',
	'Class:lnkDocumentToPatch/Attribute:document_id' => 'Document',
	'Class:lnkDocumentToPatch/Attribute:document_id+' => '',
	'Class:lnkDocumentToPatch/Attribute:document_name' => 'Document name',
	'Class:lnkDocumentToPatch/Attribute:document_name+' => '',
));

//
// Class: lnkSoftwareInstanceToSoftwarePatch
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:lnkSoftwareInstanceToSoftwarePatch' => 'Link Software Instance / Software Patch',
	'Class:lnkSoftwareInstanceToSoftwarePatch+' => '',
	'Class:lnkSoftwareInstanceToSoftwarePatch/Attribute:softwarepatch_id' => 'Software patch',
	'Class:lnkSoftwareInstanceToSoftwarePatch/Attribute:softwarepatch_id+' => '',
	'Class:lnkSoftwareInstanceToSoftwarePatch/Attribute:softwarepatch_name' => 'Software patch name',
	'Class:lnkSoftwareInstanceToSoftwarePatch/Attribute:softwarepatch_name+' => '',
	'Class:lnkSoftwareInstanceToSoftwarePatch/Attribute:softwareinstance_id' => 'Software instance',
	'Class:lnkSoftwareInstanceToSoftwarePatch/Attribute:softwareinstance_id+' => '',
	'Class:lnkSoftwareInstanceToSoftwarePatch/Attribute:softwareinstance_name' => 'Software instance name',
	'Class:lnkSoftwareInstanceToSoftwarePatch/Attribute:softwareinstance_name+' => '',
));

//
// Class: lnkFunctionalCIToOSpatch
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:lnkFunctionalCIToOSpatch' => 'Link FunctionalCI / OS patch',
	'Class:lnkFunctionalCIToOSpatch+' => '',
	'Class:lnkFunctionalCIToOSpatch/Attribute:ospatch_id' => 'OS patch',
	'Class:lnkFunctionalCIToOSpatch/Attribute:ospatch_id+' => '',
	'Class:lnkFunctionalCIToOSpatch/Attribute:ospatch_name' => 'OS patch name',
	'Class:lnkFunctionalCIToOSpatch/Attribute:ospatch_name+' => '',
	'Class:lnkFunctionalCIToOSpatch/Attribute:functionalci_id' => 'Functionalci',
	'Class:lnkFunctionalCIToOSpatch/Attribute:functionalci_id+' => '',
	'Class:lnkFunctionalCIToOSpatch/Attribute:functionalci_name' => 'Functionalci name',
	'Class:lnkFunctionalCIToOSpatch/Attribute:functionalci_name+' => '',
));

//
// Class: lnkDocumentToSoftware
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:lnkDocumentToSoftware' => 'Link Document / Software',
	'Class:lnkDocumentToSoftware+' => '',
	'Class:lnkDocumentToSoftware/Attribute:software_id' => 'Software',
	'Class:lnkDocumentToSoftware/Attribute:software_id+' => '',
	'Class:lnkDocumentToSoftware/Attribute:software_name' => 'Software name',
	'Class:lnkDocumentToSoftware/Attribute:software_name+' => '',
	'Class:lnkDocumentToSoftware/Attribute:document_id' => 'Document',
	'Class:lnkDocumentToSoftware/Attribute:document_id+' => '',
	'Class:lnkDocumentToSoftware/Attribute:document_name' => 'Document name',
	'Class:lnkDocumentToSoftware/Attribute:document_name+' => '',
));

//
// Class: lnkContactToFunctionalCI
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:lnkContactToFunctionalCI' => 'Link Contact / FunctionalCI',
	'Class:lnkContactToFunctionalCI+' => '',
	'Class:lnkContactToFunctionalCI/Attribute:functionalci_id' => 'Functionalci',
	'Class:lnkContactToFunctionalCI/Attribute:functionalci_id+' => '',
	'Class:lnkContactToFunctionalCI/Attribute:functionalci_name' => 'Functionalci name',
	'Class:lnkContactToFunctionalCI/Attribute:functionalci_name+' => '',
	'Class:lnkContactToFunctionalCI/Attribute:contact_id' => 'Contact',
	'Class:lnkContactToFunctionalCI/Attribute:contact_id+' => '',
	'Class:lnkContactToFunctionalCI/Attribute:contact_name' => 'Contact name',
	'Class:lnkContactToFunctionalCI/Attribute:contact_name+' => '',
));

//
// Class: lnkDocumentToFunctionalCI
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:lnkDocumentToFunctionalCI' => 'Link Document / FunctionalCI',
	'Class:lnkDocumentToFunctionalCI+' => '',
	'Class:lnkDocumentToFunctionalCI/Attribute:functionalci_id' => 'Functionalci',
	'Class:lnkDocumentToFunctionalCI/Attribute:functionalci_id+' => '',
	'Class:lnkDocumentToFunctionalCI/Attribute:functionalci_name' => 'Functionalci name',
	'Class:lnkDocumentToFunctionalCI/Attribute:functionalci_name+' => '',
	'Class:lnkDocumentToFunctionalCI/Attribute:document_id' => 'Document',
	'Class:lnkDocumentToFunctionalCI/Attribute:document_id+' => '',
	'Class:lnkDocumentToFunctionalCI/Attribute:document_name' => 'Document name',
	'Class:lnkDocumentToFunctionalCI/Attribute:document_name+' => '',
));

//
// Class: Subnet
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:Subnet' => 'Subnet',
	'Class:Subnet+' => '',
	'Class:Subnet/Attribute:description' => 'Description',
	'Class:Subnet/Attribute:description+' => '',
	'Class:Subnet/Attribute:org_id' => 'Owner organization',
	'Class:Subnet/Attribute:org_id+' => '',
	'Class:Subnet/Attribute:org_name' => 'Name',
	'Class:Subnet/Attribute:org_name+' => 'Common name',
	'Class:Subnet/Attribute:ip' => 'IP',
	'Class:Subnet/Attribute:ip+' => '',
	'Class:Subnet/Attribute:ip_mask' => 'IP Mask',
	'Class:Subnet/Attribute:ip_mask+' => '',
));

//
// Class: NetworkInterface
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:NetworkInterface' => 'Network Interface',
	'Class:NetworkInterface+' => '',
	'Class:NetworkInterface/Attribute:name' => 'Name',
	'Class:NetworkInterface/Attribute:name+' => '',
	'Class:NetworkInterface/Attribute:finalclass' => 'Type',
	'Class:NetworkInterface/Attribute:finalclass+' => '',
));

//
// Class: IPinterface
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:IPinterface' => 'IP interface',
	'Class:IPinterface+' => '',
	'Class:IPinterface/Attribute:ipaddress' => 'IP address',
	'Class:IPinterface/Attribute:ipaddress+' => '',
	'Class:IPinterface/Attribute:macaddress' => 'MAC address',
	'Class:IPinterface/Attribute:macaddress+' => '',
	'Class:IPinterface/Attribute:comment' => 'Comment',
	'Class:IPinterface/Attribute:coment+' => '',
	'Class:IPinterface/Attribute:ipgateway' => 'IP gateway',
	'Class:IPinterface/Attribute:ipgateway+' => '',
	'Class:IPinterface/Attribute:ipmask' => 'IP mask',
	'Class:IPinterface/Attribute:ipmask+' => '',
	'Class:IPinterface/Attribute:speed' => 'Speed',
	'Class:IPinterface/Attribute:speed+' => '',
));

//
// Class: PhysicalInterface
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:PhysicalInterface' => 'Physical Interface',
	'Class:PhysicalInterface+' => '',
	'Class:PhysicalInterface/Attribute:connectableci_id' => 'Device',
	'Class:PhysicalInterface/Attribute:connectableci_id+' => '',
	'Class:PhysicalInterface/Attribute:connectableci_name' => 'Device name',
	'Class:PhysicalInterface/Attribute:connectableci_name+' => '',
));

//
// Class: LogicalInterface
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:LogicalInterface' => 'Logical Interface',
	'Class:LogicalInterface+' => '',
	'Class:LogicalInterface/Attribute:virtualmachine_id' => 'Virtual machine',
	'Class:LogicalInterface/Attribute:virtualmachine_id+' => '',
	'Class:LogicalInterface/Attribute:virtualmachine_name' => 'Virtual machine name',
	'Class:LogicalInterface/Attribute:virtualmachine_name+' => '',
));

//
// Class: FiberChanelInterface
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:FiberChanelInterface' => 'Fiber Chanel Interface',
	'Class:FiberChanelInterface+' => '',
	'Class:FiberChanelInterface/Attribute:speed' => 'Speed',
	'Class:FiberChanelInterface/Attribute:speed+' => '',
	'Class:FiberChanelInterface/Attribute:topology' => 'Topology',
	'Class:FiberChanelInterface/Attribute:topology+' => '',
	'Class:FiberChanelInterface/Attribute:wwn' => 'WWN',
	'Class:FiberChanelInterface/Attribute:wwn+' => '',
	'Class:FiberChanelInterface/Attribute:datacenterdevice_id' => 'Device',
	'Class:FiberChanelInterface/Attribute:datacenterdevice_id+' => '',
	'Class:FiberChanelInterface/Attribute:datacenterdevice_name' => 'Device name',
	'Class:FiberChanelInterface/Attribute:datacenterdevice_name+' => '',
));

//
// Class: lnkConnectableCIToNetworkDevice
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:lnkConnectableCIToNetworkDevice' => 'Link ConnectableCI / NetworkDevice',
	'Class:lnkConnectableCIToNetworkDevice+' => '',
	'Class:lnkConnectableCIToNetworkDevice/Attribute:networkdevice_id' => 'Network device',
	'Class:lnkConnectableCIToNetworkDevice/Attribute:networkdevice_id+' => '',
	'Class:lnkConnectableCIToNetworkDevice/Attribute:networkdevice_name' => 'Network device name',
	'Class:lnkConnectableCIToNetworkDevice/Attribute:networkdevice_name+' => '',
	'Class:lnkConnectableCIToNetworkDevice/Attribute:connectableci_id' => 'Connected device',
	'Class:lnkConnectableCIToNetworkDevice/Attribute:connectableci_id+' => '',
	'Class:lnkConnectableCIToNetworkDevice/Attribute:connectableci_name' => 'Connected device name',
	'Class:lnkConnectableCIToNetworkDevice/Attribute:connectableci_name+' => '',
	'Class:lnkConnectableCIToNetworkDevice/Attribute:network_port' => 'Network port',
	'Class:lnkConnectableCIToNetworkDevice/Attribute:network_port+' => '',
	'Class:lnkConnectableCIToNetworkDevice/Attribute:device_port' => 'Device port',
	'Class:lnkConnectableCIToNetworkDevice/Attribute:device_port+' => '',
	'Class:lnkConnectableCIToNetworkDevice/Attribute:connection_type' => 'Connection type',
	'Class:lnkConnectableCIToNetworkDevice/Attribute:connection_type+' => '',
	'Class:lnkConnectableCIToNetworkDevice/Attribute:connection_type/Value:downlink' => 'down link',
	'Class:lnkConnectableCIToNetworkDevice/Attribute:connection_type/Value:downlink+' => 'down link',
	'Class:lnkConnectableCIToNetworkDevice/Attribute:connection_type/Value:uplink' => 'up link',
	'Class:lnkConnectableCIToNetworkDevice/Attribute:connection_type/Value:uplink+' => 'up link',
));

//
// Class: lnkApplicationSolutionToFunctionalCI
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:lnkApplicationSolutionToFunctionalCI' => 'Link ApplicationSolution / FunctionalCI',
	'Class:lnkApplicationSolutionToFunctionalCI+' => '',
	'Class:lnkApplicationSolutionToFunctionalCI/Attribute:applicationsolution_id' => 'Application solution',
	'Class:lnkApplicationSolutionToFunctionalCI/Attribute:applicationsolution_id+' => '',
	'Class:lnkApplicationSolutionToFunctionalCI/Attribute:applicationsolution_name' => 'Application solution name',
	'Class:lnkApplicationSolutionToFunctionalCI/Attribute:applicationsolution_name+' => '',
	'Class:lnkApplicationSolutionToFunctionalCI/Attribute:functionalci_id' => 'Functionalci',
	'Class:lnkApplicationSolutionToFunctionalCI/Attribute:functionalci_id+' => '',
	'Class:lnkApplicationSolutionToFunctionalCI/Attribute:functionalci_name' => 'Functionalci name',
	'Class:lnkApplicationSolutionToFunctionalCI/Attribute:functionalci_name+' => '',
));

//
// Class: lnkApplicationSolutionToBusinessProcess
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:lnkApplicationSolutionToBusinessProcess' => 'Link ApplicationSolution / BusinessProcess',
	'Class:lnkApplicationSolutionToBusinessProcess+' => '',
	'Class:lnkApplicationSolutionToBusinessProcess/Attribute:businessprocess_id' => 'Business process',
	'Class:lnkApplicationSolutionToBusinessProcess/Attribute:businessprocess_id+' => '',
	'Class:lnkApplicationSolutionToBusinessProcess/Attribute:businessprocess_name' => 'Business process name',
	'Class:lnkApplicationSolutionToBusinessProcess/Attribute:businessprocess_name+' => '',
	'Class:lnkApplicationSolutionToBusinessProcess/Attribute:applicationsolution_id' => 'Application solution',
	'Class:lnkApplicationSolutionToBusinessProcess/Attribute:applicationsolution_id+' => '',
	'Class:lnkApplicationSolutionToBusinessProcess/Attribute:applicationsolution_name' => 'Application solution name',
	'Class:lnkApplicationSolutionToBusinessProcess/Attribute:applicationsolution_name+' => '',
));

//
// Class: lnkPersonToTeam
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:lnkPersonToTeam' => 'Link Person / Team',
	'Class:lnkPersonToTeam+' => '',
	'Class:lnkPersonToTeam/Attribute:team_id' => 'Team',
	'Class:lnkPersonToTeam/Attribute:team_id+' => '',
	'Class:lnkPersonToTeam/Attribute:team_name' => 'Team name',
	'Class:lnkPersonToTeam/Attribute:team_name+' => '',
	'Class:lnkPersonToTeam/Attribute:person_id' => 'Person',
	'Class:lnkPersonToTeam/Attribute:person_id+' => '',
	'Class:lnkPersonToTeam/Attribute:person_name' => 'Person name',
	'Class:lnkPersonToTeam/Attribute:person_name+' => '',
	'Class:lnkPersonToTeam/Attribute:role_id' => 'Role',
	'Class:lnkPersonToTeam/Attribute:role_id+' => '',
	'Class:lnkPersonToTeam/Attribute:role_name' => 'Role name',
	'Class:lnkPersonToTeam/Attribute:role_name+' => '',
));

//
// Class: Group
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:Group' => 'Group',
	'Class:Group+' => '',
	'Class:Group/Attribute:name' => 'Name',
	'Class:Group/Attribute:name+' => '',
	'Class:Group/Attribute:status' => 'Status',
	'Class:Group/Attribute:status+' => '',
	'Class:Group/Attribute:status/Value:implementation' => 'Implementation',
	'Class:Group/Attribute:status/Value:implementation+' => 'Implementation',
	'Class:Group/Attribute:status/Value:obsolete' => 'Obsolete',
	'Class:Group/Attribute:status/Value:obsolete+' => 'Obsolete',
	'Class:Group/Attribute:status/Value:production' => 'Production',
	'Class:Group/Attribute:status/Value:production+' => 'Production',
	'Class:Group/Attribute:org_id' => 'Organization',
	'Class:Group/Attribute:org_id+' => '',
	'Class:Group/Attribute:owner_name' => 'Name',
	'Class:Group/Attribute:owner_name+' => 'Common name',
	'Class:Group/Attribute:description' => 'Description',
	'Class:Group/Attribute:description+' => '',
	'Class:Group/Attribute:type' => 'Type',
	'Class:Group/Attribute:type+' => '',
	'Class:Group/Attribute:parent_id' => 'Parent Group',
	'Class:Group/Attribute:parent_id+' => '',
	'Class:Group/Attribute:parent_name' => 'Name',
	'Class:Group/Attribute:parent_name+' => '',
	'Class:Group/Attribute:ci_list' => 'Linked CIs',
	'Class:Group/Attribute:ci_list+' => '',
	'Class:Group/Attribute:parent_id_friendlyname' => 'Parent Group',
	'Class:Group/Attribute:parent_id_friendlyname+' => '',
));

//
// Class: lnkGroupToCI
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:lnkGroupToCI' => 'Link Group / CI',
	'Class:lnkGroupToCI+' => '',
	'Class:lnkGroupToCI/Attribute:group_id' => 'Group',
	'Class:lnkGroupToCI/Attribute:group_id+' => '',
	'Class:lnkGroupToCI/Attribute:group_name' => 'Name',
	'Class:lnkGroupToCI/Attribute:group_name+' => '',
	'Class:lnkGroupToCI/Attribute:ci_id' => 'CI',
	'Class:lnkGroupToCI/Attribute:ci_id+' => '',
	'Class:lnkGroupToCI/Attribute:ci_name' => 'Name',
	'Class:lnkGroupToCI/Attribute:ci_name+' => '',
	'Class:lnkGroupToCI/Attribute:reason' => 'Reason',
	'Class:lnkGroupToCI/Attribute:reason+' => '',
));


//
// Application Menu
//

Dict::Add('EN US', 'English', 'English', array(
'Menu:Catalogs' => 'Catalogs',
'Menu:Catalogs+' => 'Data types',
'Menu:Audit' => 'Audit',
'Menu:Audit+' => 'Audit',
'Menu:Organization' => 'Organizations',
'Menu:Organization+' => 'All Organizations',
'Menu:Application' => 'Applications',
'Menu:Application+' => 'All Applications',
'Menu:DBServer' => 'Database Servers',
'Menu:DBServer+' => 'Database Servers',
'Menu:Audit' => 'Audit',
'Menu:ConfigManagement' => 'Configuration Management',
'Menu:ConfigManagement+' => 'Configuration Management',
'Menu:ConfigManagementOverview' => 'Overview',
'Menu:ConfigManagementOverview+' => 'Overview',
'Menu:Contact' => 'Contacts',
'Menu:Contact+' => 'Contacts',
'Menu:Person' => 'Persons',
'Menu:Person+' => 'All Persons',
'Menu:Team' => 'Teams',
'Menu:Team+' => 'All Teams',
'Menu:Document' => 'Documents',
'Menu:Document+' => 'All Documents',
'Menu:Location' => 'Locations',
'Menu:Location+' => 'All Locations',
'Menu:ConfigManagementCI' => 'Configuration Items',
'Menu:ConfigManagementCI+' => 'Configuration Items',
'Menu:BusinessProcess' => 'Business Processes',
'Menu:BusinessProcess+' => 'All Business Processes',
'Menu:ApplicationSolution' => 'Application Solutions',
'Menu:ApplicationSolution+' => 'All Application Solutions',
'Menu:ConfigManagementSoftware' => 'Application Management',
'Menu:Licence' => 'Licences',
'Menu:Licence+' => 'All Licences',
'Menu:Patch' => 'Patches',
'Menu:Patch+' => 'All Patches',
'Menu:ApplicationInstance' => 'Installed Software',
'Menu:ApplicationInstance+' => 'Applications and Database servers',
'Menu:ConfigManagementHardware' => 'Infrastructure Management',
'Menu:Subnet' => 'Subnets',
'Menu:Subnet+' => 'All Subnets',
'Menu:NetworkDevice' => 'Network Devices',
'Menu:NetworkDevice+' => 'All Network Devices',
'Menu:Server' => 'Servers',
'Menu:Server+' => 'All Servers',
'Menu:Printer' => 'Printers',
'Menu:Printer+' => 'All Printers',
'Menu:MobilePhone' => 'Mobile Phones',
'Menu:MobilePhone+' => 'All Mobile Phones',
'Menu:PC' => 'Personal Computers',
'Menu:PC+' => 'All Personal Computers',
'Menu:NewContact' => 'New Contact',
'Menu:NewContact+' => 'New Contact',
'Menu:SearchContacts' => 'Search for contacts',
'Menu:SearchContacts+' => 'Search for contacts',
'Menu:NewCI' => 'New CI',
'Menu:NewCI+' => 'New CI',
'Menu:SearchCIs' => 'Search for CIs',
'Menu:SearchCIs+' => 'Search for CIs',
'Menu:ConfigManagement:Devices' => 'Devices',
'Menu:ConfigManagement:AllDevices' => 'Infrastructure',
'Menu:ConfigManagement:virtualization' => 'Virtualization',
'Menu:ConfigManagement:EndUsers' => 'End user devices',
'Menu:ConfigManagement:SWAndApps' => 'Software and Applications',
'Menu:ConfigManagement:Misc' => 'Miscellaneous',
'Menu:Group' => 'Groups of CIs',
'Menu:Group+' => 'Groups of CIs',
'Menu:ConfigManagement:Shortcuts' => 'Shortcuts',
'Menu:ConfigManagement:AllContacts' => 'All contacts: %1$d',
'Menu:Typology' => 'Typology configuration',
'Menu:Typology+' => 'Typology configuration',
'Menu:OSversion' => 'OS Versions',
'Menu:OSversion+' => '',
'Menu:Software' => 'Software catalog',
'Menu:Software+' => 'Software catalog',
'UI_WelcomeMenu_AllConfigItems' => 'Summary',
'Menu:ConfigManagement:Typology' => 'Typology configuration',

));


// Add translation for Fieldsets

Dict::Add('EN US', 'English', 'English', array(
'Server:baseinfo' => 'General informations',
'Server:Date' => 'Date',
'Server:moreinfo' => 'More informations',
'Server:otherinfo' => 'Other informations',
'Person:info' => 'General informations',
'Person:notifiy' => 'Notification',

));
?>
