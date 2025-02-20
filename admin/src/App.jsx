import React from 'react';
import TopBarComponent from './components/TopBarComponent/TopBarComponent';

const App = () => {
    
    const [message, setMessage] = React.useState('Hello world !');

    return (
        <>
            <TopBarComponent />
            <div className="container">
                <h1>{message}</h1>
                <button onClick={() => setMessage('Hello React !')}>Change message</button>
            </div>
        </>
    );
}

export default App; 