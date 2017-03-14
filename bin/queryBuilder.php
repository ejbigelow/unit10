<?php
/* PHP Query builder
 * @Eric Bigelow
 *  Based on the idea if a successful sequel logon has occured parameters may be passed to a form to build queries based on
 *  user roles, this file establishes the innate Roles in our app.
 *  NOTE: USER GROUPS ARE NOT IMPLEMENTED BUT; WITH THIS LOGIC, USERS MAY BE ADDED TO AN ARRAY LINKED TO SPECIFIC ROLES.
 * */

/*
 * Roles
 *
 *
 * */
//grab user role via role
if (isset($_SESSION['role'])) {
    $role = $_SESSION['role'];

//Not necessary but for my tests I needed to ensure the UI propogated the correct tables.
    if ($role == 'DBAdmin') {
        $access = array(
            'Categories',
            'CustomerCustomerDemo',
            'CustomerDemographics',
            'Customers',
            'EmployeeTerritories',
            'Employees',
            'Order_Details',
            'Orders',
            'Products',
            'Region',
            'Shippers',
            'Suppliers',
            'Territories',
            'USStates'
        );
    } elseif ($role == 'ceo') {
        $access = array(
            'Customers',
            'Employees',
            'Orders'
        );
    } elseif ($role == 'hr') {
        $access = array(
            'Employees'
        );
    } elseif ($role == 'sales') {
        $access = array(
            'Customers',
            'Orders'
        );
    } else {
        $access = array(
            'Simply no match'
        );
    }
}
/*
 * Functions to retrieve data
 *
 * */

function getData($handler, $table) {
    echo "fetching data from", $table;
    return;
}