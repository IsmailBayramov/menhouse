import axios from 'axios';


const sendTelegramMessage = async (number, name, vacancy) => {
    try {
      const token = '6802999893:AAFGYkZL0PrnhJLlnPzxMv1ERB_7u8iUVk8';
      const apiUrl = `https://api.telegram.org/bot${token}/sendMessage`;
  
      const chatIds = ['1694956390', '887442930']; // Replace with the actual chat ID
      const messageText = `${vacancy}, ${name}, ${number}`; // Replace with your message
      
      for (const chat of chatIds) {
        const response = await axios.post(apiUrl, {
          chat_id: chat,
          text: messageText,
        });
      }
      
      console.log('Message sent successfully:', response.data);
    } catch (error) {
      console.error('Error sending message:', error);
    }
};

export default sendTelegramMessage;