import { ComponentFixture, TestBed } from '@angular/core/testing';

import { DialogInformationComponent } from './dialog-information.component';

describe('DialogInformationComponent', () => {
  let component: DialogInformationComponent;
  let fixture: ComponentFixture<DialogInformationComponent>;

  beforeEach(() => {
    TestBed.configureTestingModule({
      declarations: [DialogInformationComponent]
    });
    fixture = TestBed.createComponent(DialogInformationComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
