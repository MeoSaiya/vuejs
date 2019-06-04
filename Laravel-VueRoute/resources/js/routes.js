import AppFiveComponent from './components/AppFiveComponent';
import NavigationMenu from './components/fivePage/NavigationMenu';
import NavigationMenu1 from './components/fivePage/NavigationMenu1';
import InlineEditor from './components/fivePage/InlineEditor';
import OrderForm from './components/fivePage/OrderForm';
import InstantSearch from './components/fivePage/InstantSearch';
import SwitchGrid from './components/fivePage/SwitchGrid';
import Test from './components/fivePage/Test';
import TodoItem from './components/fivePage/TodoItem';
const UserHome = { template: '<div>Home</div>' }
const UserProfile = { template: '<div>Profile</div>' }
const UserPosts = { template: '<div>Posts</div>' }

export const routes = [
    {
        path: '/',
        component: AppFiveComponent
    },
    {
        path: '/navigation-menu',
        component: NavigationMenu
    },
    {
        path: '/navigation',
        component: NavigationMenu1
    },
    {
        path: '/order-form',
        component: OrderForm
    },
    {
        path: '/instant-search',
        component: InstantSearch
    },
    {
        path: '/inline-editor',
        component: InlineEditor
    },
    {
        path: '/switch-grid',
        component: SwitchGrid
    },
    {
        path: '/user/:id',
        component: Test,
        children: [
            {
                path: 'a',
                component: TodoItem
            }
        ]
    }
];
