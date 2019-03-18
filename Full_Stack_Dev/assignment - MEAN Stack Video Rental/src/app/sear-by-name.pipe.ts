import { Pipe, PipeTransform } from '@angular/core';

@Pipe({
  name: 'searByName'
})
export class SearByNamePipe implements PipeTransform {
  searchTerm: any;
  name: any;
  transform(name: any, searchTerm: any): any {
    if(!name || !searchTerm )
    {
      return name;
    }
     return name.filter( function(name){
      return name.lastName.toLowerCase().includes(searchTerm.toLowerCase()); 
      })
      }
  }


