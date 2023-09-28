import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { BrowserAnimationsModule } from '@angular/platform-browser/animations';
import { MatButtonModule } from "@angular/material/button";
import { NotFoundComponent } from './components/not-found/not-found.component';
import { HomeComponent } from './components/home/home.component';
import { FormsModule, ReactiveFormsModule } from '@angular/forms';
import { ListItemComponent } from './components/list-item/list-item.component';
import { MatCheckboxModule } from '@angular/material/checkbox'
import { MatIconModule } from "@angular/material/icon";
import { TodoListComponent } from './components/todo-list/todo-list.component';
import { MatSidenavModule } from '@angular/material/sidenav';
import { NewListInputComponent } from './components/new-list-input/new-list-input.component';
import { NewTodoInputComponent } from './components/new-todo-input/new-todo-input.component';
import { MatInputModule } from '@angular/material/input'
import { MatDialogModule } from "@angular/material/dialog";
import { DialogInformationComponent } from './components/dialog-information/dialog-information.component';
import { DialogQuestionComponent } from './components/dialog-question/dialog-question.component';

@NgModule({
  declarations: [
    AppComponent,
    NotFoundComponent,
    HomeComponent,
    ListItemComponent,
    TodoListComponent,
    NewListInputComponent,
    NewTodoInputComponent,
    DialogInformationComponent,
    DialogQuestionComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    BrowserAnimationsModule,
    MatButtonModule,
    FormsModule,
    MatCheckboxModule,
    MatIconModule,
    MatSidenavModule,
    ReactiveFormsModule,
    MatInputModule,
    MatDialogModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
