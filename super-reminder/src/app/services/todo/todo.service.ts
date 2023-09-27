import { Injectable } from '@angular/core';
import { TodoItem } from 'src/app/models/todo-item.model';
import { TodoList } from 'src/app/models/todo-list.model';

@Injectable({
  providedIn: 'root'
})
export class TodoService {
  private readonly L_KEY_TODO_LIST = "todo-list";
  private todoListsArray: TodoList[] = [];

  constructor() {
    this.loadTodoLists();
  }

  private loadTodoLists(): void {
    const todoListString = localStorage.getItem(this.L_KEY_TODO_LIST);
    this.todoListsArray = todoListString ? JSON.parse(todoListString) : [];
  }

  getTodoLists(): TodoList[] {
    return this.todoListsArray;
  }

  addList(listName: string): void {
    const newList = new TodoList(listName);
    this.todoListsArray.push(newList);
    this.updateLocalStorage();
  }

  addListItem(listId: number, itemName: string): void {
    const listObject = this.todoListsArray.find(listItem => listItem.id === listId);

    if (listObject) {
      listObject.todos.push(new TodoItem(itemName));
      this.updateLocalStorage();
    }
  }

  private updateLocalStorage(): void {
    localStorage.setItem(this.L_KEY_TODO_LIST, JSON.stringify(this.todoListsArray));
  }
}
