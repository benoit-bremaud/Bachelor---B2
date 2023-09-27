import { Component, EventEmitter, Input, OnInit, Output } from '@angular/core';

@Component({
  selector: 'app-list-item',
  templateUrl: './list-item.component.html',
  styleUrls: ['./list-item.component.css']
})
export class ListItemComponent implements OnInit {

  @Input()
  listItem: any;


  constructor() { }

  ngOnInit(): void {
  }

  toggleFavourite() {
    this.listItem.favourite = !this.listItem.favourite;

  }

}
