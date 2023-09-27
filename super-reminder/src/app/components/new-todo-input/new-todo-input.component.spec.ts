import { ComponentFixture, TestBed } from '@angular/core/testing';

import { NewTodoInputComponent } from './new-todo-input.component';

describe('NewTodoInputComponent', () => {
  let component: NewTodoInputComponent;
  let fixture: ComponentFixture<NewTodoInputComponent>;

  beforeEach(() => {
    TestBed.configureTestingModule({
      declarations: [NewTodoInputComponent]
    });
    fixture = TestBed.createComponent(NewTodoInputComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
