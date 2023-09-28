// Importing necessary modules and components from Angular and Angular Material
import { Component, Inject, OnInit } from '@angular/core';
import { MAT_DIALOG_DATA } from '@angular/material/dialog';

// Angular component declaration with selector, template, and styles
@Component({
  selector: 'app-dialog-information', // Selector for this component
  templateUrl: './dialog-information.component.html', // Template file for this component
  styleUrls: ['./dialog-information.component.css'] // Styles for this component
})
export class DialogInformationComponent implements OnInit {

  title: string; // Variable to hold the title for the dialog
  text: string; // Variable to hold the text content for the dialog
  labelOk: string; // Variable to hold the label for the 'OK' button

  // Constructor for the component, injecting MAT_DIALOG_DATA to receive data
  constructor(
    @Inject(MAT_DIALOG_DATA) public data: any // Injecting data for the dialog
  ) {
    // Assigning values from the injected data to component variables
    this.title = data.title; // Assigning title from the injected data
    this.text = data.text; // Assigning text content from the injected data
    this.labelOk = data.labelOK; // Assigning label for the 'OK' button from the injected data
  }

  // Lifecycle hook: Angular calls this when initializing the component
  ngOnInit(): void {
    // Initialization logic can be placed here if needed
  }

}
