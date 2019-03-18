import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { AdminAddNewVideoComponent } from './admin-add-new-video.component';

describe('AdminAddNewVideoComponent', () => {
  let component: AdminAddNewVideoComponent;
  let fixture: ComponentFixture<AdminAddNewVideoComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ AdminAddNewVideoComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(AdminAddNewVideoComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
