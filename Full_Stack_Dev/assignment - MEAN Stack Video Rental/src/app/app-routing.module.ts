import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { AdminComponent } from './admin/admin.component';
import {MovieTableComponent} from './movie-table/movie-table.component'
import { ReserveVideoComponent } from './reserve-video/reserve-video.component';
import {AdminVideoListingComponent} from './admin-video-listing/admin-video-listing.component';
import {AdminCustomerListingComponent} from './admin-customer-listing/admin-customer-listing.component';
import{AdminUpdateVideoComponent} from './admin-update-video/admin-update-video.component';
import{AdminAddNewVideoComponent} from './admin-add-new-video/admin-add-new-video.component';

const routes: Routes = [
{path: '', redirectTo: '/browse', pathMatch: 'full'},
{path: "admin", component: AdminComponent },
{path: "browse", component: MovieTableComponent},
{path: "reserveVideo", component:ReserveVideoComponent},
{path: "adminVideoListing",component:AdminVideoListingComponent},
{path: "adminCustomerListing",component: AdminCustomerListingComponent},
{path: "adminAddVideo" ,component:AdminAddNewVideoComponent},
{path: "adminUpdateVideo" ,component:AdminUpdateVideoComponent}


];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
export const routingComponents = [AdminComponent,MovieTableComponent,MovieTableComponent,ReserveVideoComponent,AdminVideoListingComponent,AdminCustomerListingComponent]