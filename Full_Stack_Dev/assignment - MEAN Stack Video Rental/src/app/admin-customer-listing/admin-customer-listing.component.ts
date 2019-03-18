import { Component, OnInit } from '@angular/core';
import { Observable } from 'rxjs';
import{ PopulateTableService } from '../populate-table.service';
import { SearByNamePipe } from '../sear-by-name.pipe'
@Component({
  selector: 'app-admin-customer-listing',
  templateUrl: './admin-customer-listing.component.html',
  styleUrls: ['./admin-customer-listing.component.css']
})
export class AdminCustomerListingComponent implements OnInit {


  public customers = []
  columns: string[];
  constructor(private _populateService : PopulateTableService) {}

  ngOnInit() {
    this._populateService.getCustomers()
    .subscribe(data => this.customers = data);

    this.columns = this._populateService.getCustomerColumns();
  }

}
