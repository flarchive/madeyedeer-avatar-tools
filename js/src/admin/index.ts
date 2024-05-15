import app from 'flarum/admin/app';
import CustomAdminPage from './components/customAdminPage';
import { ExtensionSettings } from "../common/extensionSettings";
import { TranslationKeys } from "../common/translationKeys";

app.initializers.add('madeyedeer/avatar-tools', () => {
  app.extensionData
    .for('madeyedeer-avatar-tools')
    .registerSetting({
      setting: ExtensionSettings.MAXIMUM_AVATAR_FILE_SIZE,
      name: 'maximumFileSize',
      type: 'number',
      label: app.translator.trans(TranslationKeys.admin.MAXIMUM_AVATAR_FILE_SIZE),
    });

  app.extensionData
    .for('madeyedeer-avatar-tools')
    .registerPage(CustomAdminPage);
});
