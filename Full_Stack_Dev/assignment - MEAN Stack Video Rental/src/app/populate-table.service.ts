import { Injectable } from '@angular/core';
import {Http, Response} from '@angular/http'
import {HttpModule} from '@angular/http'
import 'rxjs/add/operator/map'
import {movie} from '../../backend/models/movie'
import {customer} from '../../backend/models/customer'
import { Observable } from 'rxjs';
import { HttpClient } from '@angular/common/http';



@Injectable({
  providedIn: 'root'
})
export class PopulateTableService {

 searchUrl: string;
  private movieListUrl: string = "http://localhost:3000/api/movies";
  private addMovieUrl: string = "http://localhost:3000/api/movie";
  private customerListUrl: string = "http://localhost:3000/api/customers"
  
  constructor( private http:HttpClient) { }

  //POPULATE MOVIES FROM DB 
   getMovies(): Observable<movie>{
    //  return this._http.get(this._getUrl)
    //  .map((response:Response) => response.json());

    return this.http.get<movie[]>(this.movieListUrl)
  };
  getColumns(): string[]{
    return ["title","duration","genre", "rating","director", "status"]
  };

  
  //POPULATE CUSTOMERS FROM DB

  getCustomers(): Observable<customer>{
    return this.http.get<customer[]>(this.customerListUrl)
  }

  getCustomerColumns(): string[]{
    return ["FirstName","LastName","Address","City","Phone", "Status"]
  };


}
