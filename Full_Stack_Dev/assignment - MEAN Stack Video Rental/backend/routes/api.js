const express = require('express');
const router = express.Router();
const mongoose = require('mongoose');
const Movie = require('../models/movie');
const Customer = require('../models/customer')


router.get('/', function(req,res){
    res.send('api works');
});

//DB CONNECT
mongoose.connect('mongodb://admin:admin1@ds039155.mlab.com:39155/movies')
  .then(() => {
    console.log('Connected to Mongo database!');
  })
  .catch(err  => {
    console.error('App starting error:', err.stack);
  });


  // MOVIE DATABASE QUERIES//////////////////////////


  //Get all movies
router.get('/movies',function(req,res){
    console.log('Get request for all movies')
    Movie.find({})
    .exec(function(err,movies){
        if(err){
            console.log("ERROR Cannot retreive video")
        }else{
            res.json(movies)
        }
    })
});






//ADD a movie
router.post('/movieAdd', function(req,res){
    console.log('Add a new video');
    var newMovie = new Movie();
    newMovie.title = req.body.Title;
    newMovie.duration = req.body.Duration;
    newMovie.genre = req.body.Genre;
    newMovie.rating = req.body.Rating;
    newMovie.director = req.body.Director;
    newMovie.status = req.body.Status;
    newMovie.save(function(err,insertedMovie){
        if(err){
            console.log("error adding movie");
        }else{
            res.json(insertedMovie);
        }
    });
});







// UPDATES a movie

  router.put('/movie/:title',function(req,res){
      console.log('update a video');
      Movie.find({title: req.params.title},
      {
          $set: {title: req.body.title,runningTime: req.body.runningTime,genre: req.body.genre,rating: req.body.rating,director: req.body.director,status: req.body.status}}),
      {
        new: true
      },
      function(err, updatedMovie){
          if(err ){
              res.send("Error")
          }else {
              res.json(updatedMovie)
          }
      }
      
  });

  //GET movies by TITLE
router.get('/movies/:title',function(req,res){
    console.log('Get request for single MOvie');
    Movie.find({title: req.params.title})
    .exec(function(err,movie){
        if(err){
            console.log("ERROR Cannot retrieve video")
        }else{
            res.json(movie)
        }
    });
});

//DELETE a movie
router.delete('/movie/:title',function(req,res){
    console.log('Deleting a video');
    Movie.remove({title:req.params.title},function(err,deletedMovie){
        if (err){
            res.send("Error deleting video");
        }else{
            res.json(deletedMovie);
        }
    });
});

//CUSTOMER DATABASE QUERIES//////////////////////////////////


router.get('/customers',function(req,res){
    console.log('Get request for all customers')
    Customer.find({})
    .exec(function(err,customer){
        if(err){
            console.log("ERROR Cannot retreive customer")
        }else{
            res.json(customer)
        }
    })
});


module.exports = router;