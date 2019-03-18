import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { AdminUpdateVideoComponent } from './admin-update-video.component';

describe('AdminUpdateVideoComponent', () => {
  let component: AdminUpdateVideoComponent;
  let fixture: ComponentFixture<AdminUpdateVideoComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ AdminUpdateVideoComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(AdminUpdateVideoComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
