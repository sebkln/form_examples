#
# Table structure for table 'tx_formexamples_domain_model_data'
#
CREATE TABLE tx_formexamples_domain_model_data (
    uid       int(11) unsigned NOT NULL auto_increment,
    pid       int(11) DEFAULT '0' NOT NULL,

    formtitle varchar(255) DEFAULT '' NOT NULL,
    firstname varchar(255) DEFAULT '' NOT NULL,
    lastname  varchar(255) DEFAULT '' NOT NULL,
    title     varchar(255) DEFAULT '' NOT NULL,
    company   varchar(255) DEFAULT '' NOT NULL,
    email     varchar(255) DEFAULT '' NOT NULL,
    address   varchar(255) DEFAULT '' NOT NULL,
    zip       varchar(255) DEFAULT '' NOT NULL,
    city      varchar(255) DEFAULT '' NOT NULL,
    country   varchar(255) DEFAULT '' NOT NULL,
    www       varchar(255) DEFAULT '' NOT NULL,
    telephone varchar(255) DEFAULT '' NOT NULL,
    fax       varchar(255) DEFAULT '' NOT NULL,
    subject   varchar(255) DEFAULT '' NOT NULL,
    message   text,
    media     int(11) unsigned NOT NULL default '0',

    PRIMARY KEY (uid),
    KEY       parent (pid)
);
