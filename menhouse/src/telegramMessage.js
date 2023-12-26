import axios from 'axios';


const sendTelegramMessage = async (number, name, vacancy) => {
    try {
      const token = '6166206032:AAFdxH-vnva3_dV2fLaFCXGOVIhrhbl4YXQ';
      const apiUrl = `https://api.telegram.org/bot${token}/sendMessage`;
  
      const chatId = '887442930'; // Replace with the actual chat ID
      const messageText = `${vacancy}, ${name}, ${number}`; // Replace with your message
  
      const response = await axios.post(apiUrl, {
        chat_id: chatId,
        text: messageText,
      });
  
      console.log('Message sent successfully:', response.data);
    } catch (error) {
      console.error('Error sending message:', error);
    }
};

export default sendTelegramMessage;