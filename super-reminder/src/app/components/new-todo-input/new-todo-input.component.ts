import { Component, Input, OnInit } from '@angular/core';
import { FormControl, FormGroup, Validators } from '@angular/forms';
import { throwIfEmpty } from 'rxjs';
import { TodoList } from 'src/app/models/todo-list.model';
import { TodoService } from 'src/app/services/todo/todo.service';

@Component({
  selector: 'app-new-todo-input',
  templateUrl: './new-todo-input.component.html',
  styleUrls: ['./new-todo-input.component.css']
})
export class NewTodoInputComponent implements OnInit {

  @Input()
  todoList!: TodoList;

  newItemForm!: FormGroup;

  constructor(
    private todoService: TodoService
  ) { }

  ngOnInit(): void {
    this.newItemForm = new FormGroup({
      'itemName': new FormControl(null, Validators.required)
    });
  }

  addItem($event: any, formDirective: any) {
    if (this.newItemForm.valid) {
      $event.target.blur();
      this.todoService.addListItem(this.todoList.id, this.newItemForm.value.itemName);
      formDirective.resetForm();
      this.newItemForm.reset();
    }
  }

}
