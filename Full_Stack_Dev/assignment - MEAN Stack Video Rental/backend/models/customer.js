const mongoose = require('mongoose');

const express = require('express');


const customerSchema = mongoose.Schema({
    custID: {type: Number, required: true},
    firstName: String,
    lastName: String,
    address: String,
    city: String,
    phone: String,
    status: String
})

module.exports = mongoose.model('customer', customerSchema, 'customers');