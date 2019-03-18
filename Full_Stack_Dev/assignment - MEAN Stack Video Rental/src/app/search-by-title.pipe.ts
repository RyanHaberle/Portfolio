import { Pipe, PipeTransform } from '@angular/core';

@Pipe({
  name: 'searchByTitle'
})
export class SearchByTitlePipe implements PipeTransform {
  searchTerm: any;
  title: any;
  

  transform(movies: any, searchTerm: any):  any {
    
    if(!movies || !searchTerm )
    {
      return movies;
    }
    
      return movies.filter( function(movie){
        
        

        return movie.title.toLowerCase().includes(searchTerm.toLowerCase()); 
      })
      }
    }
  

