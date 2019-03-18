import { Component, OnInit } from '@angular/core';
import {PopulateTableService} from '../populate-table.service'
@Component({
  selector: 'app-reserve-video',
  templateUrl: './reserve-video.component.html',
  styleUrls: ['./reserve-video.component.css']
})
export class ReserveVideoComponent implements OnInit {
public customers = []
  constructor(private _populateService : PopulateTableService) { }

  ngOnInit() {
    this._populateService.getCustomers().subscribe(data=> this.customers = data);
  }

}
