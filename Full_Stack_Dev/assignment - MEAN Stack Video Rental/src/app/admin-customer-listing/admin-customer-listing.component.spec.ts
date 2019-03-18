import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { AdminCustomerListingComponent } from './admin-customer-listing.component';

describe('AdminCustomerListingComponent', () => {
  let component: AdminCustomerListingComponent;
  let fixture: ComponentFixture<AdminCustomerListingComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ AdminCustomerListingComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(AdminCustomerListingComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
