import { Component } from '@angular/core';
import { CalendarEvent, CalendarView } from 'angular-calendar';
import { isSameDay, isSameMonth } from 'date-fns';
import { Subject } from 'rxjs';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {
  title(title: any) {
    throw new Error('Method not implemented.');
  }
  viewDate: Date = new Date();
  view: CalendarView = CalendarView.Week;
  CalendarView = CalendarView;

  events: CalendarEvent[] = [];

  activeDayIsOpen = false;

  refresh = new Subject<void>()

  constructor() {
    const event1 = {
      title: "Cours de tennis",
      start: new Date("2023-09-26T10:00"),
      end: new Date("2023-09-26T17:00"),
      draggable: true,
      resizable: {
        beforeStart: true,
        afterEnd: true,
      }
    }

    this.events.push(event1);

  }

  setView(view: CalendarView) {
    this.view = view;
  }

  dayClicked({ date, events }: {date:Date; events: CalendarEvent[]}): void {
    if (isSameMonth(date, this.viewDate)) {
      if ((isSameDay(this.viewDate, date) && this.activeDayIsOpen === true) || events.length === 0
      ) {
        this.activeDayIsOpen = false;
      } else {
        this.activeDayIsOpen = true;
      }
      this.viewDate = date;
    }
  }

  eventClicked(event: any) {
    console.log(event);
  }

  eventTimesChanged(event: any) {
    // console.log(event);
    event.event.start = event.newStart;
    event.event.end = event.newEnd;
    this.refresh.next();
  }


}
