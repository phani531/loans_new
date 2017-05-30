-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2017 at 06:40 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loans`
--

-- --------------------------------------------------------

--
-- Table structure for table `administration_comp_profile`
--

CREATE TABLE `administration_comp_profile` (
  `BRANCH_ID` int(11) NOT NULL,
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
  `OFFICE_EXTENSION_NUMBER` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `administration_designation`
--

CREATE TABLE `administration_designation` (
  `DESIGNATION_ID` smallint(6) NOT NULL,
  `DESIGNATION_NAME` varchar(50) DEFAULT NULL,
  `DESIGNATION_DESC` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `administration_employees`
--

CREATE TABLE `administration_employees` (
  `EMP_ID` int(11) NOT NULL,
  `EMP_NAME` varchar(500) DEFAULT NULL,
  `CLIENT_ID` int(11) NOT NULL,
  `IS_ACTIVE` tinyint(1) NOT NULL,
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
  `GENDER` char(1) DEFAULT NULL,
  `DESIGNATION_ID` smallint(6) DEFAULT NULL,
  `ACTIVE_STATUS` smallint(6) DEFAULT NULL,
  `BASIC_SALARY` decimal(18,2) DEFAULT NULL,
  `LANGUAGE` smallint(6) DEFAULT NULL,
  `EMPLOYEE_PIC_PATH` varchar(500) DEFAULT NULL,
  `VIEW_OTHER_BRANCH_DETAILS` tinyint(1) DEFAULT NULL,
  `MULTIPLE_LOGINS` tinyint(1) DEFAULT NULL,
  `ROLE_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `administration_emp_branch_info`
--

CREATE TABLE `administration_emp_branch_info` (
  `ID` int(11) NOT NULL,
  `EMP_ID` int(11) NOT NULL,
  `BRANCH_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `administration_fundallocation`
--

CREATE TABLE `administration_fundallocation` (
  `FA_ID` int(12) NOT NULL,
  `FA_DATE` date NOT NULL,
  `EMP_ID` int(12) NOT NULL,
  `Amount` float(18,2) NOT NULL,
  `IS_ACTIVE` tinyint(2) NOT NULL,
  `CREATED_BY` int(12) NOT NULL,
  `CREATED_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `MODIFIED_DATE` datetime NOT NULL,
  `MODIFIED_BY` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `administration_logins`
--

CREATE TABLE `administration_logins` (
  `LOGIN_ID` int(11) NOT NULL,
  `EMP_ID` int(11) NOT NULL,
  `LOGIN_USERNAME` varchar(50) DEFAULT NULL,
  `LOGIN_PASSWORD` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `administration_settings`
--

CREATE TABLE `administration_settings` (
  `SETTINGS_ID` int(11) NOT NULL,
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
  `MODIFIED_BY` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `client_info`
--

CREATE TABLE `client_info` (
  `CLIENT_ID` int(11) NOT NULL,
  `CLIENT_CODE` varchar(50) NOT NULL,
  `CLIENT_NAME` varchar(200) NOT NULL,
  `IS_ACTIVE` tinyint(4) NOT NULL,
  `CREATED_DATE` datetime(6) NOT NULL,
  `MODIFIED_DATE` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `first_name` int(11) NOT NULL,
  `last_name` int(11) NOT NULL,
  `sur_name` int(11) NOT NULL,
  `ssl_no` int(11) NOT NULL,
  `mobile` int(11) NOT NULL,
  `landno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer_address`
--

CREATE TABLE `customer_address` (
  `CONTACT_ID` int(11) NOT NULL,
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
  `IS_ACTIVE` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer_details`
--

CREATE TABLE `customer_details` (
  `CUSTOMER_ID` int(11) NOT NULL,
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
  `APPLIED_AMOUNT` decimal(18,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer_doc_checklist`
--

CREATE TABLE `customer_doc_checklist` (
  `CHECKLIST_ID` int(11) NOT NULL,
  `CUSTOMER_ID` int(11) NOT NULL,
  `DOCUMENT_ID` int(11) NOT NULL,
  `DOCUMENT_PIC_PATH` varchar(500) NOT NULL,
  `CREATED_DATE` datetime(6) DEFAULT NULL,
  `CREATED_BY` int(11) NOT NULL,
  `MODIFIED_DATE` datetime(6) DEFAULT NULL,
  `MODIFIED_BY` int(11) DEFAULT NULL,
  `CLIENT_ID` int(11) NOT NULL,
  `IS_ACTIVE` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer_reference`
--

CREATE TABLE `customer_reference` (
  `REFERENCE_ID` int(11) NOT NULL,
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
  `IS_ACTIVE` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `forms`
--

CREATE TABLE `forms` (
  `FORM_ID` int(11) NOT NULL,
  `FORM_NAME` varchar(100) NOT NULL,
  `MODULE_ID` int(5) NOT NULL,
  `CLIENT_ID` int(11) NOT NULL,
  `IS_ACTIVE` tinyint(1) NOT NULL,
  `CREATED_BY` int(11) NOT NULL,
  `CREATED_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `masters_advertisements`
--

CREATE TABLE `masters_advertisements` (
  `ADVERTISEMENT_ID` int(11) NOT NULL,
  `ADVERTISEMENT_NAME` varchar(25) DEFAULT NULL,
  `CREATED_DATE` datetime(6) DEFAULT NULL,
  `CREATED_BY` int(11) NOT NULL,
  `MODIFIED_DATE` datetime(6) DEFAULT NULL,
  `MODIFIED_BY` int(11) DEFAULT NULL,
  `CLIENT_ID` int(11) NOT NULL,
  `IS_ACTIVE` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `masters_agent_info`
--

CREATE TABLE `masters_agent_info` (
  `AGENT_ID` int(11) NOT NULL,
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
  `AGENT_COMMISSION_PERCENTAGE` tinyint(3) UNSIGNED DEFAULT NULL,
  `AGENT_PIC_PATH` varchar(500) DEFAULT NULL,
  `CREATED_DATE` datetime(6) DEFAULT NULL,
  `CREATED_BY` int(11) NOT NULL,
  `MODIFIED_DATE` datetime(6) DEFAULT NULL,
  `MODIFIED_BY` int(11) DEFAULT NULL,
  `CLIENT_ID` int(11) NOT NULL,
  `IS_ACTIVE` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `masters_carat`
--

CREATE TABLE `masters_carat` (
  `CARAT_ID` int(11) NOT NULL,
  `CARAT_NAME` varchar(50) NOT NULL,
  `CREATED_DATE` datetime(6) DEFAULT NULL,
  `CREATED_BY` int(11) NOT NULL,
  `MODIFIED_DATE` datetime(6) DEFAULT NULL,
  `MODIFIED_BY` int(11) DEFAULT NULL,
  `CLIENT_ID` int(11) NOT NULL,
  `IS_ACTIVE` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `masters_cash_management`
--

CREATE TABLE `masters_cash_management` (
  `CASHMANAGEMENT_ID` int(11) NOT NULL,
  `CASHMANAGEMENT_DATE` datetime(6) DEFAULT NULL,
  `CASHMANAGEMENT_AMOUNT` decimal(18,2) DEFAULT NULL,
  `CASHMANAGEMENT_RETURN_AMOUNT` decimal(18,2) DEFAULT NULL,
  `CREATED_DATE` datetime(6) DEFAULT NULL,
  `CREATED_BY` int(11) NOT NULL,
  `MODIFIED_DATE` datetime(6) DEFAULT NULL,
  `MODIFIED_BY` int(11) DEFAULT NULL,
  `CLIENT_ID` int(11) NOT NULL,
  `IS_ACTIVE` tinyint(1) NOT NULL,
  `CASHMANAGEMENT_ASSIGNEDTO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `masters_cust_bank`
--

CREATE TABLE `masters_cust_bank` (
  `BANK_ID` int(11) NOT NULL,
  `BANK_CODE` varchar(15) NOT NULL,
  `BANK_NAME` varchar(50) NOT NULL,
  `BANK_BRANCH` varchar(100) NOT NULL,
  `CREATED_DATE` datetime(6) DEFAULT NULL,
  `CREATED_BY` int(11) NOT NULL,
  `MODIFIED_DATE` datetime(6) DEFAULT NULL,
  `MODIFIED_BY` int(11) DEFAULT NULL,
  `CLIENT_ID` int(11) NOT NULL,
  `IS_ACTIVE` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `masters_cust_comp_info`
--

CREATE TABLE `masters_cust_comp_info` (
  `COMPANY_ID` int(11) NOT NULL,
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
  `COMPANY_BALANCE_CREDIT_LIMIT` decimal(18,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `masters_daily_gold_price`
--

CREATE TABLE `masters_daily_gold_price` (
  `GOLD_PRICE_ID` int(11) NOT NULL,
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
  `IS_ACTIVE` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `masters_documents`
--

CREATE TABLE `masters_documents` (
  `DOCUMENT_ID` int(11) NOT NULL,
  `DOCUMENT_NAME` varchar(50) DEFAULT NULL,
  `CREATED_DATE` datetime(6) DEFAULT NULL,
  `CREATED_BY` int(11) NOT NULL,
  `MODIFIED_DATE` datetime(6) DEFAULT NULL,
  `MODIFIED_BY` int(11) DEFAULT NULL,
  `CLIENT_ID` int(11) NOT NULL,
  `IS_ACTIVE` tinyint(1) NOT NULL,
  `DOC_TYPE` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `masters_holiday_info`
--

CREATE TABLE `masters_holiday_info` (
  `HOLIDAY_ID` int(11) NOT NULL,
  `HOLIDAY_NAME` varchar(200) DEFAULT NULL,
  `HOLIDAY_FROM_DATE` datetime(6) DEFAULT NULL,
  `HOLIDAY_TO_DATE` datetime(6) DEFAULT NULL,
  `CREATED_DATE` datetime(6) DEFAULT NULL,
  `CREATED_BY` int(11) NOT NULL,
  `MODIFIED_DATE` datetime(6) DEFAULT NULL,
  `MODIFIED_BY` int(11) DEFAULT NULL,
  `CLIENT_ID` int(11) NOT NULL,
  `IS_ACTIVE` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `masters_housestatus`
--

CREATE TABLE `masters_housestatus` (
  `HOUSESTATUS_ID` int(11) NOT NULL,
  `HOUSESTATUS_NAME` varchar(50) NOT NULL,
  `CREATED_DATE` datetime(6) DEFAULT NULL,
  `CREATED_BY` int(11) NOT NULL,
  `MODIFIED_DATE` datetime(6) DEFAULT NULL,
  `MODIFIED_BY` int(11) DEFAULT NULL,
  `CLIENT_ID` int(11) NOT NULL,
  `IS_ACTIVE` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `masters_jobsector`
--

CREATE TABLE `masters_jobsector` (
  `JOBSECTOR_ID` int(11) NOT NULL,
  `JOBSECTOR_NAME` varchar(50) NOT NULL,
  `LOAN_TYPE` tinyint(1) NOT NULL,
  `CREATED_DATE` datetime(6) DEFAULT NULL,
  `CREATED_BY` int(11) NOT NULL,
  `MODIFIED_DATE` datetime(6) DEFAULT NULL,
  `MODIFIED_BY` int(11) DEFAULT NULL,
  `CLIENT_ID` int(11) NOT NULL,
  `IS_ACTIVE` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `masters_loan_pay_terms`
--

CREATE TABLE `masters_loan_pay_terms` (
  `LOANTERM_ID` int(11) NOT NULL,
  `LOANTERM_PAYTERM` varchar(20) NOT NULL,
  `LOANTERM_PAYTYPE` smallint(6) NOT NULL,
  `LOANTERM_NOOFTERMS` smallint(6) DEFAULT NULL,
  `CREATED_DATE` datetime(6) DEFAULT NULL,
  `CREATED_BY` int(11) NOT NULL,
  `MODIFIED_DATE` datetime(6) DEFAULT NULL,
  `MODIFIED_BY` int(11) DEFAULT NULL,
  `CLIENT_ID` int(11) NOT NULL,
  `IS_ACTIVE` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `masters_locker_details`
--

CREATE TABLE `masters_locker_details` (
  `DETAIL_ID` int(11) NOT NULL,
  `LOCKER_ID` int(11) NOT NULL,
  `LOCKER_ASSIGNED_BY` int(11) NOT NULL,
  `LOCKER_ASSIGNED_DATE` datetime(6) NOT NULL,
  `LOCKER_TERMINATED_DATE` datetime(6) DEFAULT NULL,
  `LOCKER_TERMINATED_BY` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `masters_locker_master`
--

CREATE TABLE `masters_locker_master` (
  `LOCKER_ID` int(11) NOT NULL,
  `LOCKER_STORAGE_BOX_NAME` varchar(20) NOT NULL,
  `IS_OCCUPIED` tinyint(1) DEFAULT NULL,
  `CREATED_DATE` datetime(6) DEFAULT NULL,
  `CREATED_BY` int(11) NOT NULL,
  `MODIFIED_DATE` datetime(6) DEFAULT NULL,
  `MODIFIED_BY` int(11) DEFAULT NULL,
  `CLIENT_ID` int(11) NOT NULL,
  `IS_ACTIVE` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `masters_orgtype`
--

CREATE TABLE `masters_orgtype` (
  `ORGTYPE_ID` int(11) NOT NULL,
  `ORGTYPE_NAME` varchar(50) NOT NULL,
  `CREATED_DATE` datetime(6) DEFAULT NULL,
  `CREATED_BY` int(11) NOT NULL,
  `MODIFIED_DATE` datetime(6) DEFAULT NULL,
  `MODIFIED_BY` int(11) DEFAULT NULL,
  `CLIENT_ID` int(11) NOT NULL,
  `IS_ACTIVE` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `masters_ornaments`
--

CREATE TABLE `masters_ornaments` (
  `ORNAMENT_ID` int(11) NOT NULL,
  `ORNAMENT_NAME` varchar(50) NOT NULL,
  `CREATED_DATE` datetime(6) DEFAULT NULL,
  `CREATED_BY` int(11) NOT NULL,
  `MODIFIED_DATE` datetime(6) DEFAULT NULL,
  `MODIFIED_BY` int(11) DEFAULT NULL,
  `CLIENT_ID` int(11) NOT NULL,
  `IS_ACTIVE` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `masters_ornament_desc`
--

CREATE TABLE `masters_ornament_desc` (
  `ORNAMENT_DESC_ID` int(11) NOT NULL,
  `ORNAMENT_DESC_NAME` varchar(50) DEFAULT NULL,
  `ORNAMENT_DESCRIPTION` varchar(50) DEFAULT NULL,
  `ORNAMENT_TYPE` varchar(50) DEFAULT NULL,
  `CREATED_DATE` datetime(6) DEFAULT NULL,
  `CREATED_BY` int(11) NOT NULL,
  `MODIFIED_DATE` datetime(6) DEFAULT NULL,
  `MODIFIED_BY` int(11) DEFAULT NULL,
  `CLIENT_ID` int(11) NOT NULL,
  `IS_ACTIVE` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `masters_race`
--

CREATE TABLE `masters_race` (
  `RACE_ID` int(11) NOT NULL,
  `RACE_NAME` varchar(50) NOT NULL,
  `CREATED_DATE` datetime(6) DEFAULT NULL,
  `CREATED_BY` int(11) NOT NULL,
  `MODIFIED_DATE` datetime(6) DEFAULT NULL,
  `MODIFIED_BY` int(11) DEFAULT NULL,
  `CLIENT_ID` int(11) NOT NULL,
  `IS_ACTIVE` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `masters_states`
--

CREATE TABLE `masters_states` (
  `STATE_ID` int(11) NOT NULL,
  `STATE_NAME` varchar(100) DEFAULT NULL,
  `CREATED_DATE` datetime(6) DEFAULT NULL,
  `CREATED_BY` int(11) NOT NULL,
  `MODIFIED_DATE` datetime(6) DEFAULT NULL,
  `MODIFIED_BY` int(11) DEFAULT NULL,
  `CLIENT_ID` int(11) NOT NULL,
  `IS_ACTIVE` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `masters_storage_fee`
--

CREATE TABLE `masters_storage_fee` (
  `STORAGE_ID` int(11) NOT NULL,
  `STORAGE_CHARGE` decimal(18,2) NOT NULL,
  `CREATED_DATE` datetime(6) DEFAULT NULL,
  `CREATED_BY` int(11) NOT NULL,
  `MODIFIED_DATE` datetime(6) DEFAULT NULL,
  `MODIFIED_BY` int(11) DEFAULT NULL,
  `CLIENT_ID` int(11) NOT NULL,
  `IS_ACTIVE` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

CREATE TABLE `modules` (
  `MODULE_ID` int(11) NOT NULL,
  `MODULE_NAME` varchar(100) NOT NULL,
  `IS_ACTIVE` tinyint(1) NOT NULL,
  `CREATED_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `CREATED_BY` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `ROLE_ID` int(11) NOT NULL,
  `ROLE_NAME` varchar(50) NOT NULL,
  `IS_ACTIVE` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `userrights_by_roles`
--

CREATE TABLE `userrights_by_roles` (
  `UR_ID` int(11) NOT NULL,
  `FORM_ID` int(11) NOT NULL,
  `FORM_VIEW` tinyint(1) NOT NULL,
  `FORM_ADD` tinyint(1) NOT NULL,
  `FORM_EDIT` tinyint(1) NOT NULL,
  `FORM_DELETE` tinyint(1) NOT NULL,
  `FORM_REPORT` tinyint(1) NOT NULL,
  `ROLE_ID` int(11) NOT NULL,
  `IS_ACTIVE` tinyint(1) NOT NULL,
  `CREATED_BY` int(11) NOT NULL,
  `CREATED_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `MODIFIED_BY` int(11) NOT NULL,
  `MODIFIED_DATE` datetime(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `userrights_by_users`
--

CREATE TABLE `userrights_by_users` (
  `UR_ID` int(11) NOT NULL,
  `FORM_ID` int(11) NOT NULL,
  `FORM_VIEW` tinyint(1) NOT NULL,
  `FORM_ADD` tinyint(1) NOT NULL,
  `FORM_EDIT` tinyint(1) NOT NULL,
  `FORM_DELETE` tinyint(1) NOT NULL,
  `FORM_REPORT` tinyint(1) NOT NULL,
  `USER_ID` int(11) NOT NULL,
  `IS_ACTIVE` tinyint(1) NOT NULL,
  `CREATED_BY` int(11) NOT NULL,
  `CREATED_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `MODIFIED_BY` int(11) NOT NULL,
  `MODIFIED_DATE` datetime(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(225) NOT NULL,
  `last_name` varchar(225) NOT NULL,
  `phone` int(11) NOT NULL,
  `address` text,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` enum('0','1') DEFAULT '1',
  `father_name` varchar(225) NOT NULL,
  `mother_name` varchar(225) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `profilepic_random` varchar(225) NOT NULL,
  `profilepic_name` varchar(225) NOT NULL,
  `profilepic_type` varchar(225) NOT NULL,
  `forgot_password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `phone`, `address`, `created_by`, `updated_by`, `created_on`, `updated_on`, `status`, `father_name`, `mother_name`, `email`, `username`, `password`, `dob`, `profilepic_random`, `profilepic_name`, `profilepic_type`, `forgot_password`) VALUES
(1, '', '', 0, NULL, 0, 0, '2017-03-09 09:18:56', '0000-00-00 00:00:00', '1', '', '', 'reethimaveni.211@gmail.com', 'reethu', '591fbe92ecceb0d8d6e9d7efbcd5dcff1429e84b', '1991-02-21', '', '', '', '155136');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administration_comp_profile`
--
ALTER TABLE `administration_comp_profile`
  ADD PRIMARY KEY (`BRANCH_ID`);

--
-- Indexes for table `administration_designation`
--
ALTER TABLE `administration_designation`
  ADD PRIMARY KEY (`DESIGNATION_ID`);

--
-- Indexes for table `administration_employees`
--
ALTER TABLE `administration_employees`
  ADD PRIMARY KEY (`EMP_ID`);

--
-- Indexes for table `administration_emp_branch_info`
--
ALTER TABLE `administration_emp_branch_info`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `administration_fundallocation`
--
ALTER TABLE `administration_fundallocation`
  ADD PRIMARY KEY (`FA_ID`);

--
-- Indexes for table `administration_logins`
--
ALTER TABLE `administration_logins`
  ADD PRIMARY KEY (`LOGIN_ID`);

--
-- Indexes for table `administration_settings`
--
ALTER TABLE `administration_settings`
  ADD PRIMARY KEY (`SETTINGS_ID`);

--
-- Indexes for table `client_info`
--
ALTER TABLE `client_info`
  ADD PRIMARY KEY (`CLIENT_ID`);

--
-- Indexes for table `customer_address`
--
ALTER TABLE `customer_address`
  ADD PRIMARY KEY (`CONTACT_ID`);

--
-- Indexes for table `customer_details`
--
ALTER TABLE `customer_details`
  ADD PRIMARY KEY (`CUSTOMER_ID`);

--
-- Indexes for table `customer_doc_checklist`
--
ALTER TABLE `customer_doc_checklist`
  ADD PRIMARY KEY (`CHECKLIST_ID`);

--
-- Indexes for table `customer_reference`
--
ALTER TABLE `customer_reference`
  ADD PRIMARY KEY (`REFERENCE_ID`);

--
-- Indexes for table `forms`
--
ALTER TABLE `forms`
  ADD PRIMARY KEY (`FORM_ID`);

--
-- Indexes for table `masters_advertisements`
--
ALTER TABLE `masters_advertisements`
  ADD PRIMARY KEY (`ADVERTISEMENT_ID`);

--
-- Indexes for table `masters_agent_info`
--
ALTER TABLE `masters_agent_info`
  ADD PRIMARY KEY (`AGENT_ID`);

--
-- Indexes for table `masters_carat`
--
ALTER TABLE `masters_carat`
  ADD PRIMARY KEY (`CARAT_ID`);

--
-- Indexes for table `masters_cash_management`
--
ALTER TABLE `masters_cash_management`
  ADD PRIMARY KEY (`CASHMANAGEMENT_ID`);

--
-- Indexes for table `masters_cust_bank`
--
ALTER TABLE `masters_cust_bank`
  ADD PRIMARY KEY (`BANK_ID`);

--
-- Indexes for table `masters_cust_comp_info`
--
ALTER TABLE `masters_cust_comp_info`
  ADD PRIMARY KEY (`COMPANY_ID`);

--
-- Indexes for table `masters_daily_gold_price`
--
ALTER TABLE `masters_daily_gold_price`
  ADD PRIMARY KEY (`GOLD_PRICE_ID`);

--
-- Indexes for table `masters_documents`
--
ALTER TABLE `masters_documents`
  ADD PRIMARY KEY (`DOCUMENT_ID`);

--
-- Indexes for table `masters_holiday_info`
--
ALTER TABLE `masters_holiday_info`
  ADD PRIMARY KEY (`HOLIDAY_ID`);

--
-- Indexes for table `masters_housestatus`
--
ALTER TABLE `masters_housestatus`
  ADD PRIMARY KEY (`HOUSESTATUS_ID`);

--
-- Indexes for table `masters_jobsector`
--
ALTER TABLE `masters_jobsector`
  ADD PRIMARY KEY (`JOBSECTOR_ID`);

--
-- Indexes for table `masters_loan_pay_terms`
--
ALTER TABLE `masters_loan_pay_terms`
  ADD PRIMARY KEY (`LOANTERM_ID`);

--
-- Indexes for table `masters_locker_details`
--
ALTER TABLE `masters_locker_details`
  ADD PRIMARY KEY (`DETAIL_ID`);

--
-- Indexes for table `masters_locker_master`
--
ALTER TABLE `masters_locker_master`
  ADD PRIMARY KEY (`LOCKER_ID`);

--
-- Indexes for table `masters_orgtype`
--
ALTER TABLE `masters_orgtype`
  ADD PRIMARY KEY (`ORGTYPE_ID`);

--
-- Indexes for table `masters_ornaments`
--
ALTER TABLE `masters_ornaments`
  ADD PRIMARY KEY (`ORNAMENT_ID`);

--
-- Indexes for table `masters_ornament_desc`
--
ALTER TABLE `masters_ornament_desc`
  ADD PRIMARY KEY (`ORNAMENT_DESC_ID`);

--
-- Indexes for table `masters_race`
--
ALTER TABLE `masters_race`
  ADD PRIMARY KEY (`RACE_ID`);

--
-- Indexes for table `masters_states`
--
ALTER TABLE `masters_states`
  ADD PRIMARY KEY (`STATE_ID`);

--
-- Indexes for table `masters_storage_fee`
--
ALTER TABLE `masters_storage_fee`
  ADD PRIMARY KEY (`STORAGE_ID`);

--
-- Indexes for table `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`MODULE_ID`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`ROLE_ID`);

--
-- Indexes for table `userrights_by_roles`
--
ALTER TABLE `userrights_by_roles`
  ADD PRIMARY KEY (`UR_ID`);

--
-- Indexes for table `userrights_by_users`
--
ALTER TABLE `userrights_by_users`
  ADD PRIMARY KEY (`UR_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administration_comp_profile`
--
ALTER TABLE `administration_comp_profile`
  MODIFY `BRANCH_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `administration_designation`
--
ALTER TABLE `administration_designation`
  MODIFY `DESIGNATION_ID` smallint(6) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `administration_employees`
--
ALTER TABLE `administration_employees`
  MODIFY `EMP_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `administration_emp_branch_info`
--
ALTER TABLE `administration_emp_branch_info`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `administration_fundallocation`
--
ALTER TABLE `administration_fundallocation`
  MODIFY `FA_ID` int(12) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `administration_logins`
--
ALTER TABLE `administration_logins`
  MODIFY `LOGIN_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `administration_settings`
--
ALTER TABLE `administration_settings`
  MODIFY `SETTINGS_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `client_info`
--
ALTER TABLE `client_info`
  MODIFY `CLIENT_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `customer_address`
--
ALTER TABLE `customer_address`
  MODIFY `CONTACT_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `customer_details`
--
ALTER TABLE `customer_details`
  MODIFY `CUSTOMER_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `customer_doc_checklist`
--
ALTER TABLE `customer_doc_checklist`
  MODIFY `CHECKLIST_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `customer_reference`
--
ALTER TABLE `customer_reference`
  MODIFY `REFERENCE_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `forms`
--
ALTER TABLE `forms`
  MODIFY `FORM_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `masters_advertisements`
--
ALTER TABLE `masters_advertisements`
  MODIFY `ADVERTISEMENT_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `masters_agent_info`
--
ALTER TABLE `masters_agent_info`
  MODIFY `AGENT_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `masters_carat`
--
ALTER TABLE `masters_carat`
  MODIFY `CARAT_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `masters_cash_management`
--
ALTER TABLE `masters_cash_management`
  MODIFY `CASHMANAGEMENT_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `masters_cust_bank`
--
ALTER TABLE `masters_cust_bank`
  MODIFY `BANK_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `masters_cust_comp_info`
--
ALTER TABLE `masters_cust_comp_info`
  MODIFY `COMPANY_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `masters_daily_gold_price`
--
ALTER TABLE `masters_daily_gold_price`
  MODIFY `GOLD_PRICE_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `masters_documents`
--
ALTER TABLE `masters_documents`
  MODIFY `DOCUMENT_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `masters_holiday_info`
--
ALTER TABLE `masters_holiday_info`
  MODIFY `HOLIDAY_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `masters_housestatus`
--
ALTER TABLE `masters_housestatus`
  MODIFY `HOUSESTATUS_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `masters_jobsector`
--
ALTER TABLE `masters_jobsector`
  MODIFY `JOBSECTOR_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `masters_loan_pay_terms`
--
ALTER TABLE `masters_loan_pay_terms`
  MODIFY `LOANTERM_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `masters_locker_details`
--
ALTER TABLE `masters_locker_details`
  MODIFY `DETAIL_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `masters_locker_master`
--
ALTER TABLE `masters_locker_master`
  MODIFY `LOCKER_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `masters_orgtype`
--
ALTER TABLE `masters_orgtype`
  MODIFY `ORGTYPE_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `masters_ornaments`
--
ALTER TABLE `masters_ornaments`
  MODIFY `ORNAMENT_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `masters_ornament_desc`
--
ALTER TABLE `masters_ornament_desc`
  MODIFY `ORNAMENT_DESC_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `masters_race`
--
ALTER TABLE `masters_race`
  MODIFY `RACE_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `masters_states`
--
ALTER TABLE `masters_states`
  MODIFY `STATE_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `masters_storage_fee`
--
ALTER TABLE `masters_storage_fee`
  MODIFY `STORAGE_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `modules`
--
ALTER TABLE `modules`
  MODIFY `MODULE_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `ROLE_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `userrights_by_roles`
--
ALTER TABLE `userrights_by_roles`
  MODIFY `UR_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `userrights_by_users`
--
ALTER TABLE `userrights_by_users`
  MODIFY `UR_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
