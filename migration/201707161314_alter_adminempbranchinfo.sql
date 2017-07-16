/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Author:  mahesh
 * Created: 16 Jul, 2017
 */

ALTER TABLE administration_emp_branch_info ADD COLUMN CREATED_DATE datetime COMMENT 'Created date of the row';

ALTER TABLE administration_emp_branch_info ADD COLUMN MODIFIED_DATE datetime COMMENT 'Modified date of the row';

ALTER TABLE administration_emp_branch_info ADD COLUMN IS_ACTIVE tinyint(1) DEFAULT 1 COMMENT 'Modified date of the row';

ALTER TABLE administration_logins ADD COLUMN CREATED_DATE datetime COMMENT 'Created date of the row';

ALTER TABLE administration_logins ADD COLUMN MODIFIED_DATE datetime COMMENT 'Modified date of the row';

ALTER TABLE administration_logins ADD COLUMN IS_ACTIVE tinyint(1) DEFAULT 1 COMMENT 'Modified date of the row';

ALTER TABLE administration_fundallocation MODIFY COLUMN IS_ACTIVE tinyint(1) DEFAULT 1 COMMENT 'Active or not';