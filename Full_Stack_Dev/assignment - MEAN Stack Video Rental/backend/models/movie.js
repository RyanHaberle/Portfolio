const mongoose = require('mongoose');

const express = require('express');

const runningTime = "Running Time";
const movieSchema = mongoose.Schema({
    title: {type: String, required: true},
    duration: String,
    genre: String,
    rating: String,
    director: String,
    status: String
})

module.exports = mongoose.model('movie', movieSchema, 'movies');
