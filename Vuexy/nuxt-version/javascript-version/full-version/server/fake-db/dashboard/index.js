import { getPublicUrl } from '@/server/utils/getPublicUrl'

const figmaLabel = getPublicUrl('/images/icons/brands/figma-label.png')
const htmlLabel = getPublicUrl('/images/icons/brands/html-label.png')
const reactLabel = getPublicUrl('/images/icons/brands/react-label.png')
const sketchLabel = getPublicUrl('/images/icons/brands/sketch-label.png')
const xamarinLabel = getPublicUrl('/images/icons/project-icons/xamarin.png')
const vueLabel = getPublicUrl('/images/icons/brands/vue-label.png')
const pythonLabel = getPublicUrl('/images/icons/project-icons/python.png')
const avatar1 = getPublicUrl('/images/avatars/avatar-1.png')
const avatar2 = getPublicUrl('/images/avatars/avatar-2.png')
const avatar3 = getPublicUrl('/images/avatars/avatar-3.png')
const avatar4 = getPublicUrl('/images/avatars/avatar-4.png')
const avatar5 = getPublicUrl('/images/avatars/avatar-5.png')
const avatar6 = getPublicUrl('/images/avatars/avatar-6.png')
const avatar7 = getPublicUrl('/images/avatars/avatar-7.png')
const avatar8 = getPublicUrl('/images/avatars/avatar-8.png')
export const db = {
  analytics: [
    {
      logo: reactLabel,
      name: 'BGC eCommerce App',
      project: 'React Project',
      leader: 'Eileen',
      progress: 78,
      hours: '18:42',
      team: [avatar1, avatar8, avatar6],
      extraMembers: 3,
    },
    {
      logo: figmaLabel,
      name: 'Falcon Logo Design',
      project: 'Figma Project',
      leader: 'Owen',
      progress: 25,
      hours: '20:42',
      team: [avatar5, avatar2],
    },
    {
      logo: vueLabel,
      name: 'Dashboard Design',
      project: 'Vuejs Project',
      leader: 'Keith',
      progress: 62,
      hours: '120:87',
      team: [avatar8, avatar2, avatar1],
    },
    {
      logo: xamarinLabel,
      name: 'Foodista mobile app',
      project: 'Xamarin Project',
      leader: 'Merline',
      progress: 8,
      hours: '120:87',
      team: [avatar3, avatar4, avatar7],
      extraMembers: 8,
    },
    {
      logo: pythonLabel,
      name: 'Dojo Email App',
      project: 'Python Project',
      leader: 'Harmonia',
      progress: 51,
      hours: '230:10',
      team: [avatar4, avatar3, avatar1],
      extraMembers: 5,
    },
    {
      logo: sketchLabel,
      name: 'Blockchain Website',
      project: 'Sketch Project',
      leader: 'Allyson',
      progress: 92,
      hours: '342:41',
      team: [avatar1, avatar8],
    },
    {
      logo: htmlLabel,
      name: 'Hoffman Website',
      project: 'HTML Project',
      leader: 'Georgie',
      progress: 80,
      hours: '12:45',
      team: [avatar1, avatar8, avatar6],
    },
  ],
}
