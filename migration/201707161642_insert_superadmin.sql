/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Author:  mahesh
 * Created: 16 Jul, 2017
 */

INSERT INTO roles(ROLE_NAME, CREATED_DATE) values('Super Admin', NOW());

INSERT INTO administration_designation(DESIGNATION_NAME, CREATED_DATE, CREATED_BY) values('Super Admin', NOW(), 1);

INSERT INTO client_info(CLIENT_CODE, CLIENT_NAME, CREATED_DATE, MODIFIED_DATE) values('ADM123', 'SuperAdmin',NOW(), NOW());

INSERT INTO administration_employees(EMP_NAME, CLIENT_ID, DESIGNATION_ID, ROLE_ID) values('SuperAdmin', 1, 1, 1);

INSERT INTO administration_logins(EMP_ID, LOGIN_USERNAME, LOGIN_PASSWORD) values(1, 'SuperAdmin', '1e0a55d2ab93ff0fec2dc379284f05b3');
