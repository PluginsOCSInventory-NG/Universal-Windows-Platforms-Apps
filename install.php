<?php

/**
 * This function is called on installation and is used to create database schema for the plugin
 */
function extension_install_UWPapps()
{
    $commonObject = new ExtensionCommon;

    $commonObject -> sqlQuery("CREATE TABLE IF NOT EXISTS `uwpapps` (
								`ID` INT(11) NOT NULL AUTO_INCREMENT,
								`HARDWARE_ID` INT(11) NOT NULL,
                                `UWPAPPNAME` VARCHAR(128) NOT NULL,
                                `UWPAPPARCH` VARCHAR(32) DEFAULT NULL,
                                `UWPAPPVERSION` VARCHAR(32) NOT NULL,
                                `UWPAPPFULLNAME` VARCHAR(255) DEFAULT NULL,
                                `UWPAPPSTATUS` VARCHAR(32) DEFAULT NULL,
                                `UWPAPPPUBL` VARCHAR(255) DEFAULT NULL,
                                `UWPAPPINSTLOC` VARCHAR(512) DEFAULT NULL,
                                PRIMARY KEY  (`ID`,`HARDWARE_ID`)
								) ENGINE=INNODB ;");
}

/**
 * This function is called on removal and is used to destroy database schema for the plugin
 */
function extension_delete_UWPapps()
{
    $commonObject = new ExtensionCommon;
    $commonObject -> sqlQuery("DROP TABLE IF EXISTS `UWPapps`;");
}

/**
 * This function is called on plugin upgrade
 */
function extension_upgrade_UWPapps()
{

}
