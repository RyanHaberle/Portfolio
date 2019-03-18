import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { AdminVideoListingComponent } from './admin-video-listing.component';

describe('AdminVideoListingComponent', () => {
  let component: AdminVideoListingComponent;
  let fixture: ComponentFixture<AdminVideoListingComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ AdminVideoListingComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(AdminVideoListingComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
