import { Component, Input, OnInit } from '@angular/core';

@Component({
  selector: 'app-todo-list',
  templateUrl: './todo-list.component.html',
  styleUrls: ['./todo-list.component.css']
})
export class TodoListComponent implements OnInit {

  @Input() todoList: any;

  constructor() { }

  ngOnInit(): void {
      
  }

  getFavouriteTasks(isFavourite: boolean) {
    return this.todoList.filter((item: { favourite: boolean; }) => item.favourite === isFavourite);
  }

}
