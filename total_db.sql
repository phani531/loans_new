-- MySQL dump 10.13  Distrib 5.7.18, for Linux (x86_64)
--
-- Host: localhost    Database: loans
-- ------------------------------------------------------
-- Server version	5.7.18-0ubuntu0.16.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `administration_comp_profile`
--

DROP TABLE IF EXISTS `administration_comp_profile`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `administration_comp_profile` (
  `BRANCH_ID` int(11) NOT NULL AUTO_INCREMENT,
  `BRANCH_NAME` varchar(50) NOT NULL,
  `BRANCH_TYPE` smallint(6) NOT NULL,
  `BRANCH_CODE` varchar(5) NOT NULL,
  `BRANCH_REG_NO` varchar(25) NOT NULL,
  `BRANCH_LICENCE_NO` varchar(50) NOT NULL,
  `BRANCH_ADDRESS` varchar(1000) DEFAULT NULL,
  `BRANCH_OFFICE_NO` varchar(25) DEFAULT NULL,
  `BRANCH_FAX_NO` varchar(25) DEFAULT NULL,
  `BRANCH_EMAILID` varchar(50) DEFAULT NULL,
  `BRANCH_WEBSITE` varchar(50) DEFAULT NULL,
  `BRANCH_LOGO_PIC_PATH` varchar(500) DEFAULT NULL,
  `LAWYER_NAME` varchar(50) DEFAULT NULL,
  `LAWYER_ADDRESS` varchar(1000) DEFAULT NULL,
  `LAWYER_OFFICE_NO` varchar(25) DEFAULT NULL,
  `LAWYER_FAX_NO` varchar(25) DEFAULT NULL,
  `LAWYER_EMAILID` varchar(50) DEFAULT NULL,
  `FINANCIAL_YEAR_FROM` datetime(6) DEFAULT NULL,
  `FINANCIAL_YEAR_TO` datetime(6) DEFAULT NULL,
  `CREATED_DATE` datetime(6) DEFAULT NULL,
  `CREATED_BY` int(11) NOT NULL,
  `MODIFIED_DATE` datetime(6) DEFAULT NULL,
  `MODIFIED_BY` int(11) DEFAULT NULL,
  `CLIENT_ID` int(11) NOT NULL,
  `IS_ACTIVE` tinyint(1) NOT NULL,
  `OWNER_NAME` varchar(100) DEFAULT NULL,
  `OFFICE_EXTENSION_NUMBER` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`BRANCH_ID`),
  KEY `FK_ADMINISTRATION_COMP_PROFILE_ADMINISTRATION_EMPL5` (`CREATED_BY`),
  KEY `FK_ADMINISTRATION_COMP_PROFILE_CLIENT_INFO` (`CLIENT_ID`),
  CONSTRAINT `FK_ADMINISTRATION_COMP_PROFILE_ADMINISTRATION_EMPL5` FOREIGN KEY (`CREATED_BY`) REFERENCES `administration_employees` (`EMP_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_ADMINISTRATION_COMP_PROFILE_CLIENT_INFO` FOREIGN KEY (`CLIENT_ID`) REFERENCES `client_info` (`CLIENT_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `administration_designation`
--

DROP TABLE IF EXISTS `administration_designation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `administration_designation` (
  `DESIGNATION_ID` smallint(6) NOT NULL AUTO_INCREMENT,
  `DESIGNATION_NAME` varchar(50) DEFAULT NULL,
  `DESIGNATION_DESC` varchar(100) DEFAULT NULL,
  `IS_ACTIVE` tinyint(1) DEFAULT '1' COMMENT 'Row is active 1 -Active 0 - Inactive',
  `CREATED_DATE` datetime DEFAULT NULL COMMENT 'Created date',
  `MODIFIED_DATE` datetime DEFAULT NULL COMMENT 'Created date',
  `CREATED_BY` int(11) DEFAULT NULL COMMENT 'Created date of the row',
  `MODIFIED_BY` int(11) DEFAULT NULL COMMENT 'Modified date of the row',
  PRIMARY KEY (`DESIGNATION_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `administration_emp_branch_info`
--

DROP TABLE IF EXISTS `administration_emp_branch_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `administration_emp_branch_info` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `EMP_ID` int(11) NOT NULL,
  `BRANCH_ID` int(11) NOT NULL,
  `CREATED_DATE` datetime DEFAULT NULL COMMENT 'Created date of the row',
  `MODIFIED_DATE` datetime DEFAULT NULL COMMENT 'Modified date of the row',
  `IS_ACTIVE` tinyint(1) DEFAULT '1' COMMENT 'Modified date of the row',
  `CREATED_BY` int(11) DEFAULT NULL COMMENT 'Created date of the row',
  `MODIFIED_BY` int(11) DEFAULT NULL COMMENT 'Modified date of the row',
  PRIMARY KEY (`ID`),
  KEY `FK_ADMINISTRATION_EMP_BRANCH_INFO_ADMINISTRATION_E2` (`EMP_ID`),
  KEY `FK_ADMINISTRATION_EMP_BRANCH_INFO_ADMINISTRATION_C3` (`BRANCH_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `administration_employees`
--

DROP TABLE IF EXISTS `administration_employees`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `administration_employees` (
  `EMP_ID` int(11) NOT NULL AUTO_INCREMENT,
  `EMP_NAME` varchar(500) DEFAULT NULL,
  `CLIENT_ID` int(11) NOT NULL,
  `IS_ACTIVE` tinyint(1) DEFAULT '1',
  `CREATED_DATE` datetime(6) DEFAULT NULL,
  `CREATED_BY` int(11) DEFAULT NULL,
  `MODIFIED_DATE` datetime(6) DEFAULT NULL,
  `MODIFIED_BY` int(11) DEFAULT NULL,
  `IC_NO` varchar(12) DEFAULT NULL,
  `STAFF_NO` varchar(50) DEFAULT NULL,
  `ADDRESS` varchar(500) DEFAULT NULL,
  `MOBILE_NO` varchar(25) DEFAULT NULL,
  `PHONE_NO` varchar(25) DEFAULT NULL,
  `EMAIL_ID` varchar(50) DEFAULT NULL,
  `GENDER` varchar(30) DEFAULT NULL COMMENT 'Gender of user',
  `DESIGNATION_ID` smallint(6) DEFAULT NULL,
  `ACTIVE_STATUS` smallint(6) DEFAULT NULL,
  `BASIC_SALARY` decimal(18,2) DEFAULT NULL,
  `LANGUAGE` varchar(30) DEFAULT NULL COMMENT 'Language of user',
  `EMPLOYEE_PIC_PATH` varchar(500) DEFAULT NULL,
  `VIEW_OTHER_BRANCH_DETAILS` tinyint(1) DEFAULT NULL,
  `MULTIPLE_LOGINS` tinyint(1) DEFAULT NULL,
  `ROLE_ID` int(11) NOT NULL,
  PRIMARY KEY (`EMP_ID`),
  KEY `FK_ADMINISTRATION_EMPLOYEES_CLIENT_INFO` (`CLIENT_ID`),
  KEY `FK_ADMINISTRATION_EMPLOYEES_ADMINISTRATION_DESIGNA1` (`DESIGNATION_ID`),
  KEY `FK_ADMINISTRATION_EMPLOYEES_ROLE` (`ROLE_ID`),
  CONSTRAINT `FK_ADMINISTRATION_EMPLOYEES_ADMINISTRATION_DESIGNA1` FOREIGN KEY (`DESIGNATION_ID`) REFERENCES `administration_designation` (`DESIGNATION_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_ADMINISTRATION_EMPLOYEES_CLIENT_INFO` FOREIGN KEY (`CLIENT_ID`) REFERENCES `client_info` (`CLIENT_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_ADMINISTRATION_EMPLOYEES_ROLE` FOREIGN KEY (`ROLE_ID`) REFERENCES `roles` (`ROLE_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `administration_fundallocation`
--

DROP TABLE IF EXISTS `administration_fundallocation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `administration_fundallocation` (
  `FA_ID` int(12) NOT NULL AUTO_INCREMENT,
  `FA_DATE` date NOT NULL,
  `EMP_ID` int(12) NOT NULL,
  `Amount` float(18,2) NOT NULL,
  `IS_ACTIVE` tinyint(1) DEFAULT '1' COMMENT 'Active or not',
  `CREATED_BY` int(12) NOT NULL,
  `CREATED_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `MODIFIED_DATE` datetime NOT NULL,
  `MODIFIED_BY` int(12) NOT NULL,
  PRIMARY KEY (`FA_ID`),
  KEY `EMP_ID` (`EMP_ID`),
  KEY `CREATED_BY` (`CREATED_BY`),
  KEY `MODIFIED_BY` (`MODIFIED_BY`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `administration_logins`
--

DROP TABLE IF EXISTS `administration_logins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `administration_logins` (
  `LOGIN_ID` int(11) NOT NULL AUTO_INCREMENT,
  `EMP_ID` int(11) NOT NULL,
  `LOGIN_USERNAME` varchar(50) DEFAULT NULL,
  `LOGIN_PASSWORD` varchar(50) DEFAULT NULL,
  `CREATED_DATE` datetime DEFAULT NULL COMMENT 'Created date of the row',
  `MODIFIED_DATE` datetime DEFAULT NULL COMMENT 'Modified date of the row',
  `IS_ACTIVE` tinyint(1) DEFAULT '1' COMMENT 'Modified date of the row',
  `CREATED_BY` int(11) DEFAULT NULL COMMENT 'Created date of the row',
  `MODIFIED_BY` int(11) DEFAULT NULL COMMENT 'Modified date of the row',
  PRIMARY KEY (`LOGIN_ID`),
  KEY `FK_ADMINISTRATION_LOGINS_ADMINISTRATION_EMPLOYEES` (`EMP_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `administration_settings`
--

DROP TABLE IF EXISTS `administration_settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `administration_settings` (
  `SETTINGS_ID` int(11) NOT NULL AUTO_INCREMENT,
  `BRANCH_ID` int(11) NOT NULL,
  `LATE_PAYMENT_CHARGES` decimal(18,2) DEFAULT NULL,
  `SITE_VISIT_CHARGES` decimal(18,2) DEFAULT NULL,
  `LOD_CHARGES` decimal(18,2) DEFAULT NULL,
  `OTHER_CHARGES` decimal(18,2) DEFAULT NULL,
  `GIVEN_DISCOUNT` decimal(18,2) DEFAULT NULL,
  `STAMPING_CHARGES` decimal(18,2) DEFAULT NULL,
  `PROCESSING_FEES` decimal(18,2) DEFAULT NULL,
  `FILING_CHARGES` decimal(18,2) DEFAULT NULL,
  `CASH_ACCOUNT` decimal(18,2) DEFAULT NULL,
  `BANK_ACCOUNT` decimal(18,2) DEFAULT NULL,
  `NEW_LOAN_ACCOUNT_GIVEN` decimal(18,2) DEFAULT NULL,
  `RECEIVED_CAPITAL` decimal(18,2) DEFAULT NULL,
  `RECEIVED_INTEREST` decimal(18,2) DEFAULT NULL,
  `LOANS_TAKEN_INVESTMENT` decimal(18,2) DEFAULT NULL,
  `PAID_CAPITAL_INVESTMENT` decimal(18,2) DEFAULT NULL,
  `PAID_INTEREST` decimal(18,2) DEFAULT NULL,
  `APPLICATION_NO` int(11) DEFAULT NULL,
  `PAY_VOUCHER` int(11) DEFAULT NULL,
  `PERSONAL_LOAN_NO` int(11) DEFAULT NULL,
  `CHEQUE_LOAN_NO` int(11) DEFAULT NULL,
  `HIRE_PURCHASE_LOAN_NO` int(11) DEFAULT NULL,
  `SECURITY_LOAN_NO` int(11) DEFAULT NULL,
  `CHEQUE_VS_LOAN` int(11) DEFAULT NULL,
  `ALLOW_FUTURE_DATE` tinyint(1) DEFAULT NULL,
  `CALCULATION_TYPE` tinyint(1) DEFAULT NULL,
  `ADVANCE_LOAN` tinyint(1) DEFAULT NULL,
  `STATEMENT` tinyint(1) DEFAULT NULL,
  `FLEXIBILITY_OF_INTEREST` tinyint(1) DEFAULT NULL,
  `INTEREST_TYPE` tinyint(1) DEFAULT NULL,
  `PAYMENT_MODE` tinyint(1) DEFAULT NULL,
  `GOLD_LOAN` tinyint(1) DEFAULT NULL,
  `A` int(11) DEFAULT NULL,
  `B` int(11) DEFAULT NULL,
  `C` int(11) DEFAULT NULL,
  `D` int(11) DEFAULT NULL,
  `E` int(11) DEFAULT NULL,
  `F` int(11) DEFAULT NULL,
  `G` int(11) DEFAULT NULL,
  `H` int(11) DEFAULT NULL,
  `MAX_SMS_PER_WEEK` int(11) DEFAULT NULL,
  `CREATED_DATE` datetime(6) DEFAULT NULL,
  `CREATED_BY` int(11) DEFAULT NULL,
  `MODIFIED_DATE` datetime(6) DEFAULT NULL,
  `MODIFIED_BY` int(11) DEFAULT NULL,
  PRIMARY KEY (`SETTINGS_ID`),
  KEY `FK_ADMINISTRATION_SETTINGS_ADMINISTRATION_EMPLOYEES` (`CREATED_BY`),
  KEY `FK_ADMINISTRATION_SETTINGS_ADMINISTRATION_COMP_PRO4` (`BRANCH_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `client_info`
--

DROP TABLE IF EXISTS `client_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `client_info` (
  `CLIENT_ID` int(11) NOT NULL AUTO_INCREMENT,
  `CLIENT_CODE` varchar(50) NOT NULL,
  `CLIENT_NAME` varchar(200) NOT NULL,
  `IS_ACTIVE` tinyint(4) NOT NULL DEFAULT '1',
  `CREATED_DATE` datetime(6) NOT NULL,
  `MODIFIED_DATE` datetime NOT NULL,
  PRIMARY KEY (`CLIENT_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `customer_address`
--

DROP TABLE IF EXISTS `customer_address`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customer_address` (
  `CONTACT_ID` int(11) NOT NULL AUTO_INCREMENT,
  `CUSTOMER_ID` int(11) NOT NULL,
  `ADDRESS_KEY` varchar(50) DEFAULT NULL,
  `ACTUAL_ADDRESS` varchar(500) DEFAULT NULL,
  `CITY` varchar(50) DEFAULT NULL,
  `STATE_ID` int(11) NOT NULL,
  `POSTCODE` varchar(50) DEFAULT NULL,
  `PHONE1` varchar(50) DEFAULT NULL,
  `PHONE2` varchar(50) DEFAULT NULL,
  `FAX` varchar(50) DEFAULT NULL,
  `CREATED_DATE` datetime(6) DEFAULT NULL,
  `CREATED_BY` int(11) NOT NULL,
  `MODIFIED_DATE` datetime(6) DEFAULT NULL,
  `MODIFIED_BY` int(11) DEFAULT NULL,
  `CLIENT_ID` int(11) NOT NULL,
  `IS_ACTIVE` tinyint(1) NOT NULL,
  PRIMARY KEY (`CONTACT_ID`),
  KEY `FK_CUSTOMER_ADDRESS_CUSTOMER_DETAILS` (`CUSTOMER_ID`),
  KEY `FK_CUSTOMER_ADDRESS_MASTERS_STATES` (`STATE_ID`),
  KEY `FK_CUSTOMER_ADDRESS_ADMINISTRATION_EMPLOYEES` (`CREATED_BY`),
  KEY `FK_CUSTOMER_ADDRESS_CLIENT_INFO` (`CLIENT_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `customer_details`
--

DROP TABLE IF EXISTS `customer_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customer_details` (
  `CUSTOMER_ID` int(11) NOT NULL AUTO_INCREMENT,
  `CUSTOMER_TYPE` tinyint(1) NOT NULL,
  `CUSTOMER_PIC_PATH` varchar(500) DEFAULT NULL,
  `CUSTOMER_IDNO` varchar(50) NOT NULL,
  `CUSTOMER_NAME` varchar(200) NOT NULL,
  `FILE_NO` int(11) DEFAULT NULL,
  `OLDIC_NO` varchar(50) DEFAULT NULL,
  `NON_ICNO` varchar(50) DEFAULT NULL,
  `APPLICATION_DATE` datetime(6) NOT NULL,
  `AGENT_ID` int(11) DEFAULT NULL,
  `VEHICLE_NO` varchar(50) DEFAULT NULL,
  `RELATED_TO_EMP` int(11) DEFAULT NULL,
  `ADVERTISEMENT_ID` int(11) DEFAULT NULL,
  `DOB` datetime(6) DEFAULT NULL,
  `AGE` int(11) DEFAULT NULL,
  `GENDER` tinyint(1) DEFAULT NULL,
  `HOUSESTATUS_ID` int(11) DEFAULT NULL,
  `MARTIAL_STATUS` smallint(6) DEFAULT NULL,
  `EMAIL_ID` varchar(50) DEFAULT NULL,
  `APPLIED_BRANCH_ID` int(11) DEFAULT NULL,
  `COMPANY_ID` int(11) DEFAULT NULL,
  `OCCUPATION_DEPT_NAME` varchar(50) DEFAULT NULL,
  `RACE_ID` int(11) DEFAULT NULL,
  `PRESENT_SALARY` decimal(18,2) DEFAULT NULL,
  `JOBSECTOR_ID` int(11) DEFAULT NULL,
  `YEARS_OR_SERVICE_YEARS` int(11) DEFAULT NULL,
  `YEARS_OR_SERVICE_MONTHS` int(11) DEFAULT NULL,
  `CREDIT_LIMIT` decimal(18,2) DEFAULT NULL,
  `BANK_ID` int(11) DEFAULT NULL,
  `BANK_ACCOUNTNO` varchar(50) DEFAULT NULL,
  `BANK_ATM_CARD_NO` varchar(50) DEFAULT NULL,
  `BANK_ATM_CARD_PIN_NO` varchar(50) DEFAULT NULL,
  `BANK_ATM_CARD_VALIDITY` datetime(6) DEFAULT NULL,
  `INTERNET_BANKING_USER_NAME` varchar(50) DEFAULT NULL,
  `INTERNET_BANKING_PASSWORD` varchar(50) DEFAULT NULL,
  `MONEY_DEPOSIT_BANK_ID` int(11) DEFAULT NULL,
  `MONEY_DEPOSIT_ACCOUNT_NO` varchar(50) DEFAULT NULL,
  `MONEY_DEPOSIT_ACCOUNT_HOLDER_NAME` varchar(100) DEFAULT NULL,
  `SPOUSE_PIC_PATH` varchar(500) DEFAULT NULL,
  `SPOUSE_IDNO` varchar(50) DEFAULT NULL,
  `SPOUSE_NAME` varchar(100) DEFAULT NULL,
  `SPOUSE_FATHERS_NAME` varchar(100) DEFAULT NULL,
  `SPOUSE_MOTHERS_NAME` varchar(100) DEFAULT NULL,
  `SPOUSE_EMAILID` varchar(50) DEFAULT NULL,
  `SPOUSE_HOME_PHONE` varchar(50) DEFAULT NULL,
  `SPOUSE_HAND_PHONE` varchar(50) DEFAULT NULL,
  `SPOUSE_ADDRESS` varchar(500) DEFAULT NULL,
  `SPOUSE_DOB` datetime(6) DEFAULT NULL,
  `SPOUSE_AGE` int(11) DEFAULT NULL,
  `SPOUSE_NO_OF_CHILDREN` int(11) DEFAULT NULL,
  `SPOUSE_GENDER` tinyint(1) DEFAULT NULL,
  `SPOUSE_RACE_ID` int(11) DEFAULT NULL,
  `SPOUSE_COMPANY_NAME` varchar(50) DEFAULT NULL,
  `SPOUSE_OCCUPATION_DEPT` varchar(50) DEFAULT NULL,
  `SPOUSE_YEARS_OF_SERVICE_YEAR` int(11) DEFAULT NULL,
  `SPOUSE_YEARS_OF_SERVICE_MONTH` int(11) DEFAULT NULL,
  `SPOUSE_SALARY` decimal(18,2) DEFAULT NULL,
  `SPOUSE_OFFICE_PHONE1` varchar(50) DEFAULT NULL,
  `SPOUSE_OFFICE_PHONE2` varchar(50) DEFAULT NULL,
  `SPOUSE_OFFICE_ADDRESS` varchar(500) DEFAULT NULL,
  `GUARANTER_PIC_PATH` varchar(500) DEFAULT NULL,
  `GUARANTER_IDNO` varchar(50) DEFAULT NULL,
  `GUARANTER_NAME` varchar(100) DEFAULT NULL,
  `GUARANTER_FATHERS_NAME` varchar(100) DEFAULT NULL,
  `GUARANTER_MOTHERS_NAME` varchar(100) DEFAULT NULL,
  `GUARANTER_EMAILID` varchar(50) DEFAULT NULL,
  `GUARANTER_HOME_PHONE` varchar(50) DEFAULT NULL,
  `GUARANTER_HAND_PHONE` varchar(50) DEFAULT NULL,
  `GUARANTER_ADDRESS` varchar(500) DEFAULT NULL,
  `GUARANTER_DOB` datetime(6) DEFAULT NULL,
  `GUARANTER_AGE` int(11) DEFAULT NULL,
  `GUARANTER_NO_OF_CHILDREN` int(11) DEFAULT NULL,
  `GUARANTER_GENDER` tinyint(1) DEFAULT NULL,
  `GUARANTER_RACE_ID` int(11) DEFAULT NULL,
  `GUARANTER_COMPANY_NAME` varchar(50) DEFAULT NULL,
  `GUARANTER_OCCUPATION_DEPT` varchar(50) DEFAULT NULL,
  `GUARANTER_YEARS_OF_SERVICE_YEAR` int(11) DEFAULT NULL,
  `GUARANTER_YEARS_OF_SERVICE_MONTH` int(11) DEFAULT NULL,
  `GUARANTER_SALARY` decimal(18,2) DEFAULT NULL,
  `GUARANTER_OFFICE_PHONE1` varchar(50) DEFAULT NULL,
  `GUARANTER_OFFICE_PHONE2` varchar(50) DEFAULT NULL,
  `GUARANTER_OFFICE_ADDRESS` varchar(500) DEFAULT NULL,
  `CUSTOMER_POPUP_NOTES` varchar(500) DEFAULT NULL,
  `VERIFICATION_HR_INFO` varchar(500) DEFAULT NULL,
  `VERIFICATION_SPOUSE_INFO` varchar(500) DEFAULT NULL,
  `VERIFICATION_REFERENCE_INFO` varchar(500) DEFAULT NULL,
  `VERIFICATION_OTHER_INFO` varchar(500) DEFAULT NULL,
  `VERIFICATION_CTOS_INFO` varchar(500) DEFAULT NULL,
  `VERIFICATION_CTOS_ATTACHMENT_FILE_PATH` varchar(500) DEFAULT NULL,
  `VERIFICATION_COMPLETED` tinyint(1) NOT NULL,
  `APPLICATION_APPROVED_REJECTED_STATUS` tinyint(1) DEFAULT NULL,
  `DIRECTOR_NAME2` varchar(200) DEFAULT NULL,
  `DIRECTOR2_OCCUPATION_DEPT_NAME` varchar(50) DEFAULT NULL,
  `DIRECTOR_NAME3` varchar(200) DEFAULT NULL,
  `DIRECTOR3_OCCUPATION_DEPT_NAME` varchar(50) DEFAULT NULL,
  `PAID_UP_CAPITAL` decimal(18,2) DEFAULT NULL,
  `ORGTYPE_ID` int(11) DEFAULT NULL,
  `VERIFICATION_GUARANTER_INFO` varchar(500) DEFAULT NULL,
  `CREATED_DATE` datetime(6) DEFAULT NULL,
  `CREATED_BY` int(11) NOT NULL,
  `MODIFIED_DATE` datetime(6) DEFAULT NULL,
  `MODIFIED_BY` int(11) DEFAULT NULL,
  `CLIENT_ID` int(11) NOT NULL,
  `IS_ACTIVE` tinyint(1) NOT NULL,
  `APPROVED_REJECTED_BY_EMP` int(11) DEFAULT NULL,
  `APPLICATION_APPROVED_REJECTED_DATE` datetime(6) DEFAULT NULL,
  `APPLICABLE_AMOUNT` decimal(18,2) DEFAULT NULL,
  `APPLIED_AMOUNT` decimal(18,2) DEFAULT NULL,
  PRIMARY KEY (`CUSTOMER_ID`),
  KEY `FK_CUSTOMER_DETAILS_MASTERS_AGENT_INFO` (`AGENT_ID`),
  KEY `FK_CUSTOMER_DETAILS_ADMINISTRATION_COMP_PROFILE` (`APPLIED_BRANCH_ID`),
  KEY `FK_CUSTOMER_DETAILS_MASTERS_CUST_COMP_INFO` (`COMPANY_ID`),
  KEY `FK_CUSTOMER_DETAILS_MASTERS_RACE` (`RACE_ID`),
  KEY `FK_CUSTOMER_DETAILS_MASTERS_JOBSECTOR` (`JOBSECTOR_ID`),
  KEY `FK_CUSTOMER_DETAILS_MASTERS_CUST_BANK` (`BANK_ID`),
  KEY `FK_CUSTOMER_DETAILS_MASTERS_ORGTYPE` (`ORGTYPE_ID`),
  KEY `FK_CUSTOMER_DETAILS_ADMINISTRATION_EMPLOYEES` (`CREATED_BY`),
  KEY `FK_CUSTOMER_DETAILS_CLIENT_INFO` (`CLIENT_ID`),
  KEY `FK_CUSTOMER_DETAILS_ADMINISTRATION_EMPLOYEES1` (`APPROVED_REJECTED_BY_EMP`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `customer_doc_checklist`
--

DROP TABLE IF EXISTS `customer_doc_checklist`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customer_doc_checklist` (
  `CHECKLIST_ID` int(11) NOT NULL AUTO_INCREMENT,
  `CUSTOMER_ID` int(11) NOT NULL,
  `DOCUMENT_ID` int(11) NOT NULL,
  `DOCUMENT_PIC_PATH` varchar(500) NOT NULL,
  `CREATED_DATE` datetime(6) DEFAULT NULL,
  `CREATED_BY` int(11) NOT NULL,
  `MODIFIED_DATE` datetime(6) DEFAULT NULL,
  `MODIFIED_BY` int(11) DEFAULT NULL,
  `CLIENT_ID` int(11) NOT NULL,
  `IS_ACTIVE` tinyint(1) NOT NULL,
  PRIMARY KEY (`CHECKLIST_ID`),
  KEY `FK_CUSTOMER_DOC_CHECKLIST_CUSTOMER_DETAILS` (`CUSTOMER_ID`),
  KEY `FK_CUSTOMER_DOC_CHECKLIST_MASTERS_DOCUMENTS` (`DOCUMENT_ID`),
  KEY `FK_CUSTOMER_DOC_CHECKLIST_ADMINISTRATION_EMPLOYEES` (`CREATED_BY`),
  KEY `FK_CUSTOMER_DOC_CHECKLIST_CLIENT_INFO` (`CLIENT_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `customer_loan_payments`
--

DROP TABLE IF EXISTS `customer_loan_payments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customer_loan_payments` (
  `payment_id` int(255) NOT NULL AUTO_INCREMENT,
  `payment_date` date DEFAULT NULL,
  `payment_method` tinyint(1) DEFAULT NULL,
  `receipt_id` tinyint(1) DEFAULT NULL,
  `late_pay_charges` decimal(10,2) DEFAULT NULL,
  `lod_charges` decimal(10,2) DEFAULT NULL,
  `site_vist_charges` decimal(10,2) DEFAULT NULL,
  `other_charges` decimal(10,2) DEFAULT NULL,
  `wd_amount` decimal(10,2) DEFAULT NULL,
  `recevied_amount` decimal(10,2) DEFAULT NULL,
  `card_balance` decimal(10,2) DEFAULT NULL,
  `wd_by` int(255) DEFAULT NULL,
  `created_by` int(255) DEFAULT NULL,
  `modified_by` int(255) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  PRIMARY KEY (`payment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `customer_reference`
--

DROP TABLE IF EXISTS `customer_reference`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customer_reference` (
  `REFERENCE_ID` int(11) NOT NULL AUTO_INCREMENT,
  `CUSTOMER_ID` int(11) NOT NULL,
  `REFERENCE_NAME` varchar(50) NOT NULL,
  `REFERENCE_IDNO` varchar(50) NOT NULL,
  `REFERENCE_RELATION` varchar(50) DEFAULT NULL,
  `ADDRESS_KEY` varchar(50) DEFAULT NULL,
  `ACTUAL_ADDRESS` varchar(500) DEFAULT NULL,
  `CITY` varchar(50) DEFAULT NULL,
  `STATE_ID` int(11) NOT NULL,
  `POSTCODE` varchar(50) DEFAULT NULL,
  `PHONE1` varchar(50) DEFAULT NULL,
  `PHONE2` varchar(50) DEFAULT NULL,
  `FAX` varchar(50) DEFAULT NULL,
  `CREATED_DATE` datetime(6) DEFAULT NULL,
  `CREATED_BY` int(11) NOT NULL,
  `MODIFIED_DATE` datetime(6) DEFAULT NULL,
  `MODIFIED_BY` int(11) DEFAULT NULL,
  `CLIENT_ID` int(11) NOT NULL,
  `IS_ACTIVE` tinyint(1) NOT NULL,
  PRIMARY KEY (`REFERENCE_ID`),
  KEY `FK_CUSTOMER_REFERENCE_CUSTOMER_DETAILS` (`CUSTOMER_ID`),
  KEY `FK_CUSTOMER_REFERENCE_MASTERS_STATES` (`STATE_ID`),
  KEY `FK_CUSTOMER_REFERENCE_ADMINISTRATION_EMPLOYEES` (`CREATED_BY`),
  KEY `FK_CUSTOMER_REFERENCE_CLIENT_INFO` (`CLIENT_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `forms`
--

DROP TABLE IF EXISTS `forms`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `forms` (
  `FORM_ID` int(11) NOT NULL AUTO_INCREMENT,
  `FORM_NAME` varchar(100) NOT NULL,
  `MODULE_ID` int(5) NOT NULL,
  `CLIENT_ID` int(11) NOT NULL,
  `IS_ACTIVE` tinyint(1) NOT NULL,
  `CREATED_BY` int(11) NOT NULL,
  `CREATED_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`FORM_ID`),
  KEY `forms_ibfk_1` (`CLIENT_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `loans`
--

DROP TABLE IF EXISTS `loans`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `loans` (
  `loan_id` int(255) NOT NULL AUTO_INCREMENT,
  `customer_id` int(255) DEFAULT NULL,
  `loan_type` int(255) DEFAULT NULL,
  `applied_amount` decimal(10,2) DEFAULT NULL,
  `approved_rejected` tinyint(1) DEFAULT NULL,
  `approved_rejected_date` date DEFAULT NULL,
  `loan_duration` int(255) DEFAULT NULL,
  `approved_amount` decimal(10,2) DEFAULT NULL,
  `fixed_running` tinyint(1) DEFAULT NULL,
  `fixed_interest` int(255) DEFAULT NULL,
  `processing_fees` decimal(10,2) DEFAULT NULL,
  `staming_charges` decimal(10,2) DEFAULT NULL,
  `filing_charges` decimal(10,2) DEFAULT NULL,
  `other_chargers` decimal(10,2) DEFAULT NULL,
  `due_date` date DEFAULT NULL,
  `new_due_date` date DEFAULT NULL,
  `loan_application_no` varchar(255) DEFAULT NULL,
  `client_id` int(255) DEFAULT NULL,
  `created_by` int(255) DEFAULT NULL,
  `created_on` datetime DEFAULT NULL,
  `modified_by` int(255) DEFAULT NULL,
  `modified_on` datetime DEFAULT NULL,
  PRIMARY KEY (`loan_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `masters_advertisements`
--

DROP TABLE IF EXISTS `masters_advertisements`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `masters_advertisements` (
  `ADVERTISEMENT_ID` int(11) NOT NULL AUTO_INCREMENT,
  `ADVERTISEMENT_NAME` varchar(25) DEFAULT NULL,
  `CREATED_DATE` datetime(6) DEFAULT NULL,
  `CREATED_BY` int(11) NOT NULL,
  `MODIFIED_DATE` datetime(6) DEFAULT NULL,
  `MODIFIED_BY` int(11) DEFAULT NULL,
  `CLIENT_ID` int(11) NOT NULL,
  `IS_ACTIVE` tinyint(1) NOT NULL,
  PRIMARY KEY (`ADVERTISEMENT_ID`),
  KEY `FK_MASTERS_ADVERTISEMENTS_CLIENT_INFO` (`CLIENT_ID`),
  KEY `FK_MASTERS_ADVERTISEMENTS_ADMINISTRATION_EMPLOYEES` (`CREATED_BY`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `masters_agent_info`
--

DROP TABLE IF EXISTS `masters_agent_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `masters_agent_info` (
  `AGENT_ID` int(11) NOT NULL AUTO_INCREMENT,
  `AGENT_IDNO` varchar(14) NOT NULL,
  `AGENT_NAME` varchar(50) NOT NULL,
  `AGENT_ADDRESS` varchar(1000) DEFAULT NULL,
  `AGENT_HOUSE_CTC_NO` varchar(25) DEFAULT NULL,
  `AGENT_MOBILE_CTC_NO` varchar(25) DEFAULT NULL,
  `AGENT_COMPANY_NAME` varchar(50) DEFAULT NULL,
  `AGENT_COMPANY_ADDRESS` varchar(1000) DEFAULT NULL,
  `AGENT_COMPANY_CTC_NO` varchar(25) DEFAULT NULL,
  `AGENT_COMMISSION_TYPE` tinyint(1) NOT NULL,
  `AGENT_COMMISSION_AMOUNT` decimal(18,2) DEFAULT NULL,
  `AGENT_COMMISSION_PERCENTAGE` tinyint(3) unsigned DEFAULT NULL,
  `AGENT_PIC_PATH` varchar(500) DEFAULT NULL,
  `CREATED_DATE` datetime(6) DEFAULT NULL,
  `CREATED_BY` int(11) NOT NULL,
  `MODIFIED_DATE` datetime(6) DEFAULT NULL,
  `MODIFIED_BY` int(11) DEFAULT NULL,
  `CLIENT_ID` int(11) NOT NULL,
  `IS_ACTIVE` tinyint(1) NOT NULL,
  PRIMARY KEY (`AGENT_ID`),
  KEY `FK_MASTERS_AGENT_INFO_ADMINISTRATION_EMPLOYEES` (`CREATED_BY`),
  KEY `FK_MASTERS_AGENT_INFO_CLIENT_INFO` (`CLIENT_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `masters_carat`
--

DROP TABLE IF EXISTS `masters_carat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `masters_carat` (
  `CARAT_ID` int(11) NOT NULL AUTO_INCREMENT,
  `CARAT_NAME` varchar(50) NOT NULL,
  `CREATED_DATE` datetime(6) DEFAULT NULL,
  `CREATED_BY` int(11) NOT NULL,
  `MODIFIED_DATE` datetime(6) DEFAULT NULL,
  `MODIFIED_BY` int(11) DEFAULT NULL,
  `CLIENT_ID` int(11) NOT NULL,
  `IS_ACTIVE` tinyint(1) NOT NULL,
  PRIMARY KEY (`CARAT_ID`),
  KEY `FK_MASTERS_CARAT_ADMINISTRATION_EMPLOYEES` (`CREATED_BY`),
  KEY `FK_MASTERS_CARAT_CLIENT_INFO` (`CLIENT_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `masters_cash_management`
--

DROP TABLE IF EXISTS `masters_cash_management`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `masters_cash_management` (
  `CASHMANAGEMENT_ID` int(11) NOT NULL AUTO_INCREMENT,
  `CASHMANAGEMENT_DATE` datetime(6) DEFAULT NULL,
  `CASHMANAGEMENT_AMOUNT` decimal(18,2) DEFAULT NULL,
  `CASHMANAGEMENT_RETURN_AMOUNT` decimal(18,2) DEFAULT NULL,
  `CREATED_DATE` datetime(6) DEFAULT NULL,
  `CREATED_BY` int(11) NOT NULL,
  `MODIFIED_DATE` datetime(6) DEFAULT NULL,
  `MODIFIED_BY` int(11) DEFAULT NULL,
  `CLIENT_ID` int(11) NOT NULL,
  `IS_ACTIVE` tinyint(1) NOT NULL,
  `CASHMANAGEMENT_ASSIGNEDTO` int(11) NOT NULL,
  PRIMARY KEY (`CASHMANAGEMENT_ID`),
  KEY `FK_MASTERS_CASH_MANAGEMENT_CLIENT_INFO` (`CLIENT_ID`),
  KEY `FK_MASTERS_CASH_MANAGEMENT_ADMINISTRATION_EMPLOYEES` (`CREATED_BY`),
  KEY `FK_MASTERS_CASH_MANAGEMENT_ADMINISTRATION_EMPLOYEES1` (`CASHMANAGEMENT_ASSIGNEDTO`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `masters_cust_bank`
--

DROP TABLE IF EXISTS `masters_cust_bank`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `masters_cust_bank` (
  `BANK_ID` int(11) NOT NULL AUTO_INCREMENT,
  `BANK_CODE` varchar(15) NOT NULL,
  `BANK_NAME` varchar(50) NOT NULL,
  `BANK_BRANCH` varchar(100) NOT NULL,
  `CREATED_DATE` datetime(6) DEFAULT NULL,
  `CREATED_BY` int(11) NOT NULL,
  `MODIFIED_DATE` datetime(6) DEFAULT NULL,
  `MODIFIED_BY` int(11) DEFAULT NULL,
  `CLIENT_ID` int(11) NOT NULL,
  `IS_ACTIVE` tinyint(1) NOT NULL,
  PRIMARY KEY (`BANK_ID`),
  KEY `FK_MASTERS_CUST_BANK_ADMINISTRATION_EMPLOYEES` (`CREATED_BY`),
  KEY `FK_MASTERS_CUST_BANK_CLIENT_INFO` (`CLIENT_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `masters_cust_comp_info`
--

DROP TABLE IF EXISTS `masters_cust_comp_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `masters_cust_comp_info` (
  `COMPANY_ID` int(11) NOT NULL AUTO_INCREMENT,
  `COMPANY_CODE` varchar(20) NOT NULL,
  `COMPANY_NAME` varchar(100) NOT NULL,
  `COMPANY_ADDRESS` varchar(500) DEFAULT NULL,
  `COMPANY_CITY` varchar(100) DEFAULT NULL,
  `STATE_ID` int(11) DEFAULT NULL,
  `COMPANY_POSTCODE` varchar(50) DEFAULT NULL,
  `COMPANY_PHONE1` varchar(50) DEFAULT NULL,
  `COMPANY_PHONE2` varchar(50) DEFAULT NULL,
  `COMPANY_FAX` varchar(50) DEFAULT NULL,
  `COMPANY_CREDIT_LIMIT` decimal(18,2) DEFAULT NULL,
  `COMPANY_SALARY_DAY_FROM1` smallint(6) DEFAULT NULL,
  `COMPANY_SALARY_DAY_TO1` smallint(6) DEFAULT NULL,
  `COMPANY_SALARY_DAY_FROM2` smallint(6) DEFAULT NULL,
  `COMPANY_SALARY_DAY_TO2` smallint(6) DEFAULT NULL,
  `CREATED_DATE` datetime(6) DEFAULT NULL,
  `CREATED_BY` int(11) NOT NULL,
  `MODIFIED_DATE` datetime(6) DEFAULT NULL,
  `MODIFIED_BY` int(11) DEFAULT NULL,
  `CLIENT_ID` int(11) NOT NULL,
  `IS_ACTIVE` tinyint(1) NOT NULL,
  `PIC_NAME` varchar(100) DEFAULT NULL,
  `PIC_DESIGNATION` varchar(50) DEFAULT NULL,
  `PIC_CONTACT_NO` varchar(50) DEFAULT NULL,
  `PIC_MOBILE_NO` varchar(50) DEFAULT NULL,
  `COMPANY_BALANCE_CREDIT_LIMIT` decimal(18,2) DEFAULT NULL,
  PRIMARY KEY (`COMPANY_ID`),
  KEY `FK_MASTERS_CUST_COMP_INFO_CLIENT_INFO` (`CLIENT_ID`),
  KEY `FK_MASTERS_CUST_COMP_INFO_MASTERS_STATES` (`STATE_ID`),
  KEY `FK_MASTERS_CUST_COMP_INFO_ADMINISTRATION_EMPLOYEES` (`CREATED_BY`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `masters_daily_gold_price`
--

DROP TABLE IF EXISTS `masters_daily_gold_price`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `masters_daily_gold_price` (
  `GOLD_PRICE_ID` int(11) NOT NULL AUTO_INCREMENT,
  `CARAT_ID` int(11) NOT NULL,
  `GOLD_PRICE_DATE` date NOT NULL,
  `GOLD_PRICE` decimal(18,2) NOT NULL,
  `GOLD_PRICE_FACTOR` decimal(18,2) DEFAULT NULL,
  `GOLD_PRICE_BASIS` decimal(18,2) DEFAULT NULL,
  `CREATED_DATE` datetime(6) DEFAULT NULL,
  `CREATED_BY` int(11) NOT NULL,
  `MODIFIED_DATE` datetime(6) DEFAULT NULL,
  `MODIFIED_BY` int(11) DEFAULT NULL,
  `CLIENT_ID` int(11) NOT NULL,
  `IS_ACTIVE` tinyint(1) NOT NULL,
  PRIMARY KEY (`GOLD_PRICE_ID`),
  KEY `FK_MASTERS_DAILY_GOLD_PRICE_CLIENT_INFO` (`CLIENT_ID`),
  KEY `FK_MASTERS_DAILY_GOLD_PRICE_ADMINISTRATION_EMPLOYEES` (`CREATED_BY`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `masters_documents`
--

DROP TABLE IF EXISTS `masters_documents`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `masters_documents` (
  `DOCUMENT_ID` int(11) NOT NULL AUTO_INCREMENT,
  `DOCUMENT_NAME` varchar(50) DEFAULT NULL,
  `CREATED_DATE` datetime(6) DEFAULT NULL,
  `CREATED_BY` int(11) NOT NULL,
  `MODIFIED_DATE` datetime(6) DEFAULT NULL,
  `MODIFIED_BY` int(11) DEFAULT NULL,
  `CLIENT_ID` int(11) NOT NULL,
  `IS_ACTIVE` tinyint(1) NOT NULL,
  `DOC_TYPE` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`DOCUMENT_ID`),
  KEY `FK_MASTERS_DOCUMENTS_ADMINISTRATION_EMPLOYEES` (`CREATED_BY`),
  KEY `FK_MASTERS_DOCUMENTS_CLIENT_INFO` (`CLIENT_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `masters_holiday_info`
--

DROP TABLE IF EXISTS `masters_holiday_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `masters_holiday_info` (
  `HOLIDAY_ID` int(11) NOT NULL AUTO_INCREMENT,
  `HOLIDAY_NAME` varchar(200) DEFAULT NULL,
  `HOLIDAY_FROM_DATE` datetime(6) DEFAULT NULL,
  `HOLIDAY_TO_DATE` datetime(6) DEFAULT NULL,
  `CREATED_DATE` datetime(6) DEFAULT NULL,
  `CREATED_BY` int(11) NOT NULL,
  `MODIFIED_DATE` datetime(6) DEFAULT NULL,
  `MODIFIED_BY` int(11) DEFAULT NULL,
  `CLIENT_ID` int(11) NOT NULL,
  `IS_ACTIVE` tinyint(1) NOT NULL,
  PRIMARY KEY (`HOLIDAY_ID`),
  KEY `FK_MASTERS_HOLIDAY_INFO_CLIENT_INFO` (`CLIENT_ID`),
  KEY `FK_MASTERS_HOLIDAY_INFO_ADMINISTRATION_EMPLOYEES` (`CREATED_BY`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `masters_housestatus`
--

DROP TABLE IF EXISTS `masters_housestatus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `masters_housestatus` (
  `HOUSESTATUS_ID` int(11) NOT NULL AUTO_INCREMENT,
  `HOUSESTATUS_NAME` varchar(50) NOT NULL,
  `CREATED_DATE` datetime(6) DEFAULT NULL,
  `CREATED_BY` int(11) NOT NULL,
  `MODIFIED_DATE` datetime(6) DEFAULT NULL,
  `MODIFIED_BY` int(11) DEFAULT NULL,
  `CLIENT_ID` int(11) NOT NULL,
  `IS_ACTIVE` tinyint(1) NOT NULL,
  PRIMARY KEY (`HOUSESTATUS_ID`),
  KEY `FK_MASTERS_HOUSESTATUS_ADMINISTRATION_EMPLOYEES` (`CREATED_BY`),
  KEY `FK_MASTERS_HOUSESTATUS_CLIENT_INFO` (`CLIENT_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `masters_jobsector`
--

DROP TABLE IF EXISTS `masters_jobsector`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `masters_jobsector` (
  `JOBSECTOR_ID` int(11) NOT NULL AUTO_INCREMENT,
  `JOBSECTOR_NAME` varchar(50) NOT NULL,
  `LOAN_TYPE` tinyint(1) NOT NULL,
  `CREATED_DATE` datetime(6) DEFAULT NULL,
  `CREATED_BY` int(11) NOT NULL,
  `MODIFIED_DATE` datetime(6) DEFAULT NULL,
  `MODIFIED_BY` int(11) DEFAULT NULL,
  `CLIENT_ID` int(11) NOT NULL,
  `IS_ACTIVE` tinyint(1) NOT NULL,
  PRIMARY KEY (`JOBSECTOR_ID`),
  KEY `FK_MASTERS_JOBSECTOR_ADMINISTRATION_EMPLOYEES` (`CREATED_BY`),
  KEY `FK_MASTERS_JOBSECTOR_CLIENT_INFO` (`CLIENT_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `masters_loan_pay_terms`
--

DROP TABLE IF EXISTS `masters_loan_pay_terms`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `masters_loan_pay_terms` (
  `LOANTERM_ID` int(11) NOT NULL AUTO_INCREMENT,
  `LOANTERM_PAYTERM` varchar(20) NOT NULL,
  `LOANTERM_PAYTYPE` smallint(6) NOT NULL,
  `LOANTERM_NOOFTERMS` smallint(6) DEFAULT NULL,
  `CREATED_DATE` datetime(6) DEFAULT NULL,
  `CREATED_BY` int(11) NOT NULL,
  `MODIFIED_DATE` datetime(6) DEFAULT NULL,
  `MODIFIED_BY` int(11) DEFAULT NULL,
  `CLIENT_ID` int(11) NOT NULL,
  `IS_ACTIVE` tinyint(1) NOT NULL,
  PRIMARY KEY (`LOANTERM_ID`),
  KEY `FK_MASTERS_LOAN_PAY_TERMS_ADMINISTRATION_EMPLOYEES` (`CREATED_BY`),
  KEY `FK_MASTERS_LOAN_PAY_TERMS_CLIENT_INFO` (`CLIENT_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `masters_locker_details`
--

DROP TABLE IF EXISTS `masters_locker_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `masters_locker_details` (
  `DETAIL_ID` int(11) NOT NULL AUTO_INCREMENT,
  `LOCKER_ID` int(11) NOT NULL,
  `LOCKER_ASSIGNED_BY` int(11) NOT NULL,
  `LOCKER_ASSIGNED_DATE` datetime(6) NOT NULL,
  `LOCKER_TERMINATED_DATE` datetime(6) DEFAULT NULL,
  `LOCKER_TERMINATED_BY` int(11) DEFAULT NULL,
  PRIMARY KEY (`DETAIL_ID`),
  KEY `FK_MASTERS_LOCKER_DETAILS_MASTERS_LOCKER_MASTER` (`LOCKER_ID`),
  KEY `FK_MASTERS_LOCKER_DETAILS_ADMINISTRATION_EMPLOYEES1` (`LOCKER_ASSIGNED_BY`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `masters_locker_master`
--

DROP TABLE IF EXISTS `masters_locker_master`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `masters_locker_master` (
  `LOCKER_ID` int(11) NOT NULL AUTO_INCREMENT,
  `LOCKER_STORAGE_BOX_NAME` varchar(20) NOT NULL,
  `IS_OCCUPIED` tinyint(1) DEFAULT NULL,
  `CREATED_DATE` datetime(6) DEFAULT NULL,
  `CREATED_BY` int(11) NOT NULL,
  `MODIFIED_DATE` datetime(6) DEFAULT NULL,
  `MODIFIED_BY` int(11) DEFAULT NULL,
  `CLIENT_ID` int(11) NOT NULL,
  `IS_ACTIVE` tinyint(1) NOT NULL,
  PRIMARY KEY (`LOCKER_ID`),
  KEY `FK_MASTERS_LOCKER_DETAILS_CLIENT_INFO` (`CLIENT_ID`),
  KEY `FK_MASTERS_LOCKER_DETAILS_ADMINISTRATION_EMPLOYEES` (`CREATED_BY`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `masters_orgtype`
--

DROP TABLE IF EXISTS `masters_orgtype`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `masters_orgtype` (
  `ORGTYPE_ID` int(11) NOT NULL AUTO_INCREMENT,
  `ORGTYPE_NAME` varchar(50) NOT NULL,
  `CREATED_DATE` datetime(6) DEFAULT NULL,
  `CREATED_BY` int(11) NOT NULL,
  `MODIFIED_DATE` datetime(6) DEFAULT NULL,
  `MODIFIED_BY` int(11) DEFAULT NULL,
  `CLIENT_ID` int(11) NOT NULL,
  `IS_ACTIVE` tinyint(1) NOT NULL,
  PRIMARY KEY (`ORGTYPE_ID`),
  KEY `FK_MASTERS_ORGTYPE_ADMINISTRATION_EMPLOYEES` (`CREATED_BY`),
  KEY `FK_MASTERS_ORGTYPE_CLIENT_INFO` (`CLIENT_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `masters_ornament_desc`
--

DROP TABLE IF EXISTS `masters_ornament_desc`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `masters_ornament_desc` (
  `ORNAMENT_DESC_ID` int(11) NOT NULL AUTO_INCREMENT,
  `ORNAMENT_DESC_NAME` varchar(50) DEFAULT NULL,
  `ORNAMENT_DESCRIPTION` varchar(50) DEFAULT NULL,
  `ORNAMENT_TYPE` varchar(50) DEFAULT NULL,
  `CREATED_DATE` datetime(6) DEFAULT NULL,
  `CREATED_BY` int(11) NOT NULL,
  `MODIFIED_DATE` datetime(6) DEFAULT NULL,
  `MODIFIED_BY` int(11) DEFAULT NULL,
  `CLIENT_ID` int(11) NOT NULL,
  `IS_ACTIVE` tinyint(1) NOT NULL,
  PRIMARY KEY (`ORNAMENT_DESC_ID`),
  KEY `FK_MASTERS_ORNAMENT_DESC_CLIENT_INFO` (`CLIENT_ID`),
  KEY `FK_MASTERS_ORNAMENT_DESC_ADMINISTRATION_EMPLOYEES` (`CREATED_BY`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `masters_ornaments`
--

DROP TABLE IF EXISTS `masters_ornaments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `masters_ornaments` (
  `ORNAMENT_ID` int(11) NOT NULL AUTO_INCREMENT,
  `ORNAMENT_NAME` varchar(50) NOT NULL,
  `CREATED_DATE` datetime(6) DEFAULT NULL,
  `CREATED_BY` int(11) NOT NULL,
  `MODIFIED_DATE` datetime(6) DEFAULT NULL,
  `MODIFIED_BY` int(11) DEFAULT NULL,
  `CLIENT_ID` int(11) NOT NULL,
  `IS_ACTIVE` tinyint(1) NOT NULL,
  PRIMARY KEY (`ORNAMENT_ID`),
  KEY `FK_MASTERS_ORNAMENTS_ADMINISTRATION_EMPLOYEES` (`CREATED_BY`),
  KEY `FK_MASTERS_ORNAMENTS_CLIENT_INFO` (`CLIENT_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `masters_race`
--

DROP TABLE IF EXISTS `masters_race`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `masters_race` (
  `RACE_ID` int(11) NOT NULL AUTO_INCREMENT,
  `RACE_NAME` varchar(50) NOT NULL,
  `CREATED_DATE` datetime(6) DEFAULT NULL,
  `CREATED_BY` int(11) NOT NULL,
  `MODIFIED_DATE` datetime(6) DEFAULT NULL,
  `MODIFIED_BY` int(11) DEFAULT NULL,
  `CLIENT_ID` int(11) NOT NULL,
  `IS_ACTIVE` tinyint(1) NOT NULL,
  PRIMARY KEY (`RACE_ID`),
  KEY `FK_MASTERS_RACE_ADMINISTRATION_EMPLOYEES` (`CREATED_BY`),
  KEY `FK_MASTERS_RACE_CLIENT_INFO` (`CLIENT_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `masters_states`
--

DROP TABLE IF EXISTS `masters_states`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `masters_states` (
  `STATE_ID` int(11) NOT NULL AUTO_INCREMENT,
  `STATE_NAME` varchar(100) DEFAULT NULL,
  `CREATED_DATE` datetime(6) DEFAULT NULL,
  `CREATED_BY` int(11) NOT NULL,
  `MODIFIED_DATE` datetime(6) DEFAULT NULL,
  `MODIFIED_BY` int(11) DEFAULT NULL,
  `CLIENT_ID` int(11) NOT NULL,
  `IS_ACTIVE` tinyint(1) NOT NULL,
  PRIMARY KEY (`STATE_ID`),
  KEY `FK_MASTERS_STATES_ADMINISTRATION_EMPLOYEES` (`CREATED_BY`),
  KEY `FK_MASTERS_STATES_CLIENT_INFO` (`CLIENT_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `masters_storage_fee`
--

DROP TABLE IF EXISTS `masters_storage_fee`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `masters_storage_fee` (
  `STORAGE_ID` int(11) NOT NULL AUTO_INCREMENT,
  `STORAGE_CHARGE` decimal(18,2) NOT NULL,
  `CREATED_DATE` datetime(6) DEFAULT NULL,
  `CREATED_BY` int(11) NOT NULL,
  `MODIFIED_DATE` datetime(6) DEFAULT NULL,
  `MODIFIED_BY` int(11) DEFAULT NULL,
  `CLIENT_ID` int(11) NOT NULL,
  `IS_ACTIVE` tinyint(1) NOT NULL,
  PRIMARY KEY (`STORAGE_ID`),
  KEY `FK_MASTERS_STORAGE_FEE_CLIENT_INFO` (`CLIENT_ID`),
  KEY `FK_MASTERS_STORAGE_FEE_ADMINISTRATION_EMPLOYEES` (`CREATED_BY`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `modules`
--

DROP TABLE IF EXISTS `modules`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `modules` (
  `MODULE_ID` int(11) NOT NULL AUTO_INCREMENT,
  `MODULE_NAME` varchar(100) NOT NULL,
  `IS_ACTIVE` tinyint(1) NOT NULL,
  `CREATED_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `CREATED_BY` int(11) NOT NULL,
  PRIMARY KEY (`MODULE_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `ROLE_ID` int(11) NOT NULL AUTO_INCREMENT,
  `ROLE_NAME` varchar(50) NOT NULL,
  `IS_ACTIVE` tinyint(1) DEFAULT '1' COMMENT 'Row is active or not 1-Active, 0-In active',
  `CREATED_DATE` datetime DEFAULT NULL COMMENT 'Row is active or not 1-Active, 0-In active',
  `MODIFIED_DATE` datetime DEFAULT NULL COMMENT 'Row is active or not 1-Active, 0-In active',
  PRIMARY KEY (`ROLE_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `userrights_by_roles`
--

DROP TABLE IF EXISTS `userrights_by_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `userrights_by_roles` (
  `UR_ID` int(11) NOT NULL AUTO_INCREMENT,
  `FORM_ID` int(11) NOT NULL,
  `FORM_VIEW` tinyint(1) NOT NULL,
  `FORM_ADD` tinyint(1) NOT NULL,
  `FORM_EDIT` tinyint(1) NOT NULL,
  `FORM_DELETE` tinyint(1) NOT NULL,
  `FORM_REPORT` tinyint(1) NOT NULL,
  `ROLE_ID` int(11) NOT NULL,
  `IS_ACTIVE` tinyint(1) NOT NULL,
  `CREATED_BY` int(11) NOT NULL,
  `CREATED_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `MODIFIED_BY` int(11) NOT NULL,
  `MODIFIED_DATE` datetime(1) NOT NULL,
  PRIMARY KEY (`UR_ID`),
  KEY `userrights_by_roles_ibfk_1` (`FORM_ID`),
  KEY `userrights_by_roles_ibfk_2` (`ROLE_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `userrights_by_users`
--

DROP TABLE IF EXISTS `userrights_by_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `userrights_by_users` (
  `UR_ID` int(11) NOT NULL AUTO_INCREMENT,
  `FORM_ID` int(11) NOT NULL,
  `FORM_VIEW` tinyint(1) NOT NULL,
  `FORM_ADD` tinyint(1) NOT NULL,
  `FORM_EDIT` tinyint(1) NOT NULL,
  `FORM_DELETE` tinyint(1) NOT NULL,
  `FORM_REPORT` tinyint(1) NOT NULL,
  `USER_ID` int(11) NOT NULL,
  `IS_ACTIVE` tinyint(1) NOT NULL,
  `CREATED_BY` int(11) NOT NULL,
  `CREATED_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `MODIFIED_BY` int(11) NOT NULL,
  `MODIFIED_DATE` datetime(1) NOT NULL,
  PRIMARY KEY (`UR_ID`),
  KEY `userrights_by_users_ibfk_1` (`FORM_ID`),
  KEY `userrights_by_users_ibfk_2` (`USER_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-07-16 20:19:06
