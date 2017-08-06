/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


jQuery.validator.addMethod("namefield", function (value, element) {
    value = value.trim();
    if (value.charAt(0) == " " || value.charAt(0) == "." || value.charAt(0) == "'" || value.charAt(0) == "-") {
        return false;
    }
    var fieldName = element.name.split("_").join(" ");
    $.validator.messages.namefield = "Please enter a valid " + fieldName;
    return this.optional(element) || NAME_FIELD.test(value);
}, $.validator.messages.namefield);

jQuery.validator.addMethod("numberfield", function (value, element) {
    value = value.trim();
    var fieldName = element.name.split("_").join(" ");
    $.validator.messages.numberfield = "Please enter a valid " + fieldName;
    return this.optional(element) || NUMERIC.test(value);
}, $.validator.messages.numberfield);

jQuery.validator.addMethod("alphanumeric", function (value, element) {
    value = value.trim();
    var fieldName = element.name.split("_").join(" ");
    $.validator.messages.alphanumeric = "Please enter a valid " + fieldName;
    return this.optional(element) || ALPHA_NUMERIC.test(value);
}, $.validator.messages.alphanumeric);
