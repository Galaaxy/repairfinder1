#
# Table structure for table 'tx_repmodel_domain_model_device'
#
CREATE TABLE tx_repmodel_domain_model_device (
    uid int(11) NOT NULL auto_increment,
    pid int(11) DEFAULT '0' NOT NULL,
    manufacturer int(11) unsigned DEFAULT '0' NOT NULL,
    name varchar(255) DEFAULT '' NOT NULL,
    damage varchar(255) DEFAULT '' NOT NULL,

    PRIMARY KEY (uid),
    KEY parent (pid),
    KEY language (l10n_parent,sys_language_uid)
);

#
# Table structure for table 'tx_repmodel_domain_model_damage'
#
CREATE TABLE tx_repmodel_domain_model_damage (
    uid int(11) NOT NULL auto_increment,
    pid int(11) DEFAULT '0' NOT NULL,
    name varchar(255) DEFAULT '' NOT NULL,

    PRIMARY KEY (uid),
    KEY parent (pid),
    KEY language (l10n_parent,sys_language_uid)
);

#
# Table structure for table 'tx_repmodel_device_damage_mm'
#
CREATE TABLE tx_repmodel_device_damage_mm (
  uid_local int(11) unsigned DEFAULT '0' NOT NULL,
  uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
  sorting int(11) unsigned DEFAULT '0' NOT NULL,
  sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,
  KEY uid_local (uid_local),
  KEY uid_foreign (uid_foreign)
);
