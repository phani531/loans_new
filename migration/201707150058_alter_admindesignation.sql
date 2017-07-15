/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Author:  mahesh
 * Created: 16 Jul, 2017
 */

ALTER TABLE administration_designation ADD COLUMN IS_ACTIVE tinyint(1) DEFAULT 1 COMMENT 'Row is active 1 -Active 0 - Inactive';

ALTER TABLE administration_designation ADD COLUMN CREATED_DATE datetime DEFAULT null COMMENT 'Created date';

ALTER TABLE administration_designation ADD COLUMN MODIFIED_DATE datetime DEFAULT null COMMENT 'Created date';

ALTER TABLE administration_employees modify column LANGUAGE varchar(30) DEFAULT NULL COMMENT 'Language of user';

ALTER TABLE administration_employees modify column GENDER varchar(30) DEFAULT NULL COMMENT 'Gender of user';