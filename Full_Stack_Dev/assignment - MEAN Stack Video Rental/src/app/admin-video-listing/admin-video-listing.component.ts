import { Component, OnInit } from '@angular/core';
import{ PopulateTableService } from '../populate-table.service';
import { Observable } from 'rxjs';
import { Title } from '@angular/platform-browser';
import { Http } from '@angular/http';

@Component({
  selector: 'app-admin-video-listing',
  templateUrl: './admin-video-listing.component.html',
  styleUrls: ['./admin-video-listing.component.css'],
  providers:[PopulateTableService]
})
export class AdminVideoListingComponent implements OnInit {

  columns: string[];
  public movies = [];

  constructor(private _populateService : PopulateTableService) { }

  ngOnInit() {

    this._populateService.getMovies()
    .subscribe(data => this.movies = data)

    this.columns = this._populateService.getColumns();
  }
  deleteMovie(i):any{
     
      }
    
  
  
}
