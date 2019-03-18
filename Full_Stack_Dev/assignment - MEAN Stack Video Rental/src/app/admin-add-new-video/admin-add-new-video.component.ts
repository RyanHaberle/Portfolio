import { Component, OnInit } from '@angular/core';
import {movie} from "../../../backend/models/movie"
import {movieSchema} from "../../../backend/models/movie"
import { Http } from '@angular/http';
import { JsonPipe } from '@angular/common';
import { Title } from '@angular/platform-browser';
@Component({
  selector: 'app-admin-add-new-video',
  templateUrl: './admin-add-new-video.component.html',
  styleUrls: ['./admin-add-new-video.component.css']
})
export class AdminAddNewVideoComponent implements OnInit {
  public movie = [];
  constructor(private http:Http) { 
   
  }
 
  ngOnInit() {
  }
  onSubmit(){
    this.http.post(' http://localhost:3000/api/movieAdd',JSON.stringify(Title))
  }
}


