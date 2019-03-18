import { TestBed } from '@angular/core/testing';

import { PopulateTableService } from './populate-table.service';

describe('PopulateTableService', () => {
  beforeEach(() => TestBed.configureTestingModule({}));

  it('should be created', () => {
    const service: PopulateTableService = TestBed.get(PopulateTableService);
    expect(service).toBeTruthy();
  });
});
