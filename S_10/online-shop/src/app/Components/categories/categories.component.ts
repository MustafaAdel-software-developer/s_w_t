import { Component } from '@angular/core';

@Component({
  selector: 'app-categories',
  templateUrl: './categories.component.html',
  styleUrls: ['./categories.component.css'],
})
export class CategoriesComponent {
  categories: any[] = [
    { name: 'Category 1', imageUrl: '/assets/img/cat-1.jpg' },
    { name: 'Category 2', imageUrl: '/assets/img/cat-2.jpg' },
    { name: 'Category 3', imageUrl: '/assets/img/cat-3.jpg' },
    { name: 'Category 4', imageUrl: '/assets/img/cat-4.jpg' },
  ];
}
