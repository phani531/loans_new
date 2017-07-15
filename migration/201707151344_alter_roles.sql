/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Author:  mahesh
 * Created: 15 Jul, 2017
 */

ALTER table roles modify column IS_ACTIVE tinyint(1) DEFAULT 1 COMMENT 'Row is active or not 1-Active, 0-In active';

ALTER table roles modify column CREATED_BY INT(11) COMMENT 'Created by - Who created';

ALTER table roles modify column MODIFIED_BY INT(11) COMMENT 'Login id of who modified';

ALTER table roles add column CREATED_TIME datetime DEFAULT NULL COMMENT 'Created time of the role';

ALTER table roles add column MODIFIED_TIME datetime DEFAULT NULL COMMENT 'Modified time of the role';