import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import{AppRoutingModule, routingComponents} from './app-routing.module';
import { AppComponent } from './app.component';
import { MovieTableComponent } from './movie-table/movie-table.component';

import { AdminComponent } from './admin/admin.component';
import { ReserveVideoComponent } from './reserve-video/reserve-video.component';
import { AdminVideoListingComponent } from './admin-video-listing/admin-video-listing.component';
import { AdminCustomerListingComponent } from './admin-customer-listing/admin-customer-listing.component';
import { AdminAddNewVideoComponent } from './admin-add-new-video/admin-add-new-video.component';
import { AdminUpdateVideoComponent } from './admin-update-video/admin-update-video.component';
import { PopulateTableService } from './populate-table.service';
import { HttpModule } from '@angular/http';
import {HttpClient, HttpClientModule } from '@angular/common/http';
import { SearchByTitlePipe } from './search-by-title.pipe'
import { FormsModule } from '@angular/forms';
import { SearByNamePipe } from './sear-by-name.pipe';
@NgModule({
  declarations: [
    AppComponent,
    MovieTableComponent,
   routingComponents,
    ReserveVideoComponent,
   AdminVideoListingComponent,
   AdminCustomerListingComponent,
   AdminAddNewVideoComponent,
   AdminUpdateVideoComponent,
   SearchByTitlePipe,
   SearByNamePipe,
    
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    HttpModule,
    HttpClientModule,
    FormsModule
  ],
  providers: [PopulateTableService],
  bootstrap: [AppComponent]
})
export class AppModule { }
