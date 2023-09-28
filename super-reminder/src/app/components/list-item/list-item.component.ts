// Importing necessary modules and components from Angular and Angular Material
import { Component, EventEmitter, Input, OnInit, Output } from '@angular/core';
import { MatDialog } from '@angular/material/dialog';
import { DialogInformationComponent } from '../dialog-information/dialog-information.component';

// Angular component declaration with selector, template, and styles
@Component({
  selector: 'app-list-item', // Selector for this component
  templateUrl: './list-item.component.html', // Template file for this component
  styleUrls: ['./list-item.component.css'] // Styles for this component
})
export class ListItemComponent implements OnInit {
  // Input property to receive data from parent component
  @Input()
  listItem: any; // Object representing a list item

  // Constructor for the component, injecting MatDialog service
  constructor(
    public dialog: MatDialog // MatDialog allows opening dialogs
  ) { }

  // Lifecycle hook: Angular calls this when initializing the component
  ngOnInit(): void {
    // Initialization logic can be placed here
  }

  // Function to toggle the 'favorite' status of the list item
  toggleFavourite() {
    this.listItem.favourite = !this.listItem.favourite; // Toggles the favorite status
  }

  // Function to open a dialog
  openDialog() {
    this.dialog.open(DialogInformationComponent, {
      disableClose: true, // Disables closing the dialog by clicking outside or pressing Escape
      data: {
        title: 'Mon titre', // Title for the dialog
        text: 'Bien !! T\'as vu !!', // Text content for the dialog
        labelOK: 'Vas-y !! Clique !!' // Label for the 'OK' button in the dialog
      }
    });
  }
}
