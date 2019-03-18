import { Component, OnInit } from '@angular/core';
import{ PopulateTableService } from '../populate-table.service';


@Component({
  selector: 'app-movie-table',
  templateUrl: './movie-table.component.html',
  styleUrls: ['./movie-table.component.css'],
  providers: [PopulateTableService],
  
})
export class MovieTableComponent implements OnInit {
 columns : String[];
 public movies = [];
searchTerm: string;
  constructor(private _populateService: PopulateTableService) { }

  ngOnInit() {
   this._populateService.getMovies()
   .subscribe(data => this.movies = data)
    
   this.columns = this._populateService.getColumns();
   
  }
  
  onSelectVideo(movie:any){
   
  }
  
}
