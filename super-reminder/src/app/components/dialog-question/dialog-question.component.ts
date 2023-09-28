import { Component, Inject, OnInit } from '@angular/core';
import { MAT_DIALOG_DATA, MatDialogRef } from '@angular/material/dialog';

@Component({
  selector: 'app-dialog-question',
  templateUrl: './dialog-question.component.html',
  styleUrls: ['./dialog-question.component.css']
})
export class DialogQuestionComponent implements OnInit {

  title: string; // Variable to hold the title for the dialog
  text: string; // Variable to hold the text content for the dialog
  labelNo: string; // Variable to hold the label for the 'No' button
  labelYes: string; // Variable to hold the label for the 'Yes' button

  constructor(
    @Inject(MAT_DIALOG_DATA) public data: any,
    public dialogRef: MatDialogRef<DialogQuestionComponent>
  ) {
    this.title = data.title;
    this.text = data.text;
    this.labelNo = data.labelNo;
    this.labelYes = data.labelYes;
  }

  ngOnInit(): void {
    throw new Error('Method not implemented.');
  }

  sendAnswer(answer: boolean) {

    this.dialogRef.close(answer);

  }



}
