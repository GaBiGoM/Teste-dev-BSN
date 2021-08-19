import { TestebsnAngularPage } from './app.po';

describe('testebsn-angular App', function() {
  let page: TestebsnAngularPage;

  beforeEach(() => {
    page = new TestebsnAngularPage();
  });

  it('should display message saying app works', () => {
    page.navigateTo();
    expect(page.getParagraphText()).toEqual('app works!');
  });
});
