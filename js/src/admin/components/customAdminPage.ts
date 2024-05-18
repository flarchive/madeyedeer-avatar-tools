import ExtensionPage from 'flarum/admin/components/ExtensionPage';
import { SaveSubmitEvent } from 'flarum/admin/components/AdminPage';

export default class CustomAdminPage extends ExtensionPage {
  saveSettings(e: SaveSubmitEvent) {
    super.saveSettings(e).catch(error => {
      console.error('ERROR', error);
      this.loading = false;
    });
  }
}
